@extends('admin.layouts.app')
@section('title', 'Inquiry')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Inquiry</h2>
@endsection
@section('content')
    @php
        $statusLabel = $inquiry->is_read ? 'Sudah Dibaca' : 'Baru';
        $statusClasses = $inquiry->is_read
            ? 'bg-slate-100 text-slate-700'
            : 'bg-primary/20 text-primary';
    @endphp

    <div class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark p-6 md:p-10">
        <!-- Header Actions -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-3">
                    <h2 class="text-3xl font-black text-slate-900 dark:text-slate-100 tracking-tight leading-none">
                        {{ $inquiry->name }}
                    </h2>
                    <span
                        id="inquiry-status-badge"
                        class="text-xs font-bold px-2.5 py-1 rounded uppercase tracking-wide {{ $statusClasses }}">{{ $statusLabel }}</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">event</span>
                    Received on {{ $inquiry->created_at->format('F j, Y · H:i') }}
                    {{ config('app.timezone') ? '· ' . config('app.timezone') : '' }}
                </p>
            </div>
            <div class="flex gap-2">
                <button id="mark-read-button"
                    type="button"
                    onclick="markInquiryAsRead('{{ route('cpl.inquiries.mark-read', $inquiry) }}')"
                    class="flex-1 md:flex-none px-6 h-11 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-lg">reply</span>
                    Tandai Sebagai Dibaca
                </button>
            </div>
        </div>

        <!-- Inquiry Details Card -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Buyer Information -->
            <div class="lg:col-span-1 flex flex-col gap-6">
                <div class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-primary/5">
                    <h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-4">Profile Pengirim</h3>
                    <div class="space-y-4 text-slate-900 dark:text-slate-100">
                        <div>
                            <p class="text-xs text-slate-400 font-medium uppercase mb-1">Perusahaan</p>
                            <p class="text-sm font-bold">{{ $inquiry->company ?: '-' }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium uppercase mb-1">Negara</p>
                            <p class="text-sm font-bold flex items-center gap-2">
                                {{ $inquiry->country ?: '-' }}
                                <span class="material-symbols-outlined text-sm text-slate-400">flag</span>
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium uppercase mb-1">Email</p>
                            <a class="text-sm font-bold text-primary hover:underline"
                                href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium uppercase mb-1">Nomor Telepon</p>
                            <p class="text-sm font-bold">{{ $inquiry->phone ?: '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Message Content -->
            <div class="lg:col-span-2 space-y-6">
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl p-8 shadow-sm border border-primary/5 min-h-[400px] md:min-h-[500px]">

                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-primary/5">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">Isi Pesan</h3>
                        <span class="material-symbols-outlined text-slate-300">format_quote</span>
                    </div>

                    <div class="prose dark:prose-invert max-w-none text-slate-700 dark:text-slate-300 leading-relaxed">
                        {!! nl2br(e($inquiry->message)) !!}
                    </div>

                </div>
            </div>

        </div>
        <!-- Footer Pagination/Navigation -->
        <div class="mt-8 pt-6 border-t border-primary/10 flex justify-between items-center text-sm">
            <a href="{{ route('inquiries.index') }}" class="flex items-center gap-2 text-slate-500 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">chevron_left</span>
                Kembali
            </a>
        </div>
    </div>
    <script>
        function markInquiryAsRead(url) {
            if (!url) {
                return
            }

            const tokenElement = document.querySelector('meta[name="csrf-token"]')
            const token = tokenElement ? tokenElement.getAttribute('content') : ''

            fetch(url, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json'
                }
            })
                .then((response) => {
                    if (!response.ok) {
                        return response.text().then((body) => {
                            throw new Error(body || 'Unable to mark inquiry as read.')
                        })
                    }
                    return response.json()
                })
                .then((payload) => {
                    const badge = document.getElementById('inquiry-status-badge')
                    if (badge) {
                        badge.textContent = 'Read'
                        badge.classList.remove('bg-primary/20', 'text-primary')
                        badge.classList.add('bg-slate-100', 'text-slate-700')
                    }

                    const button = document.getElementById('mark-read-button')
                    if (button) {
                        button.disabled = true
                    }

                    window.dispatchEvent(new CustomEvent('notify', {
                        detail: payload.message || 'Inquiry marked as read.'
                    }))
                })
                .catch((error) => {
                    console.error(error)
                    window.dispatchEvent(new CustomEvent('notify', {
                        detail: 'Failed to update inquiry status.'
                    }))
                })
        }
    </script>
@endsection
