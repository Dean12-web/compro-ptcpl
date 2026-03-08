@extends('admin.layouts.app')
@section('title', 'Galeri')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Galeri</h2>
@endsection
@section('content')
    <div class="flex-1 flex flex-col min-w-0 bg-background-light dark:bg-background-dark overflow-y-auto">
        <div x-data="{ show:false, message:'' }"
            @notify.window="message=$event.detail; show=true; setTimeout(()=>show=false,3000)" x-show="show" x-transition
            class="mt-4 mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 flex justify-between">

            <span x-text="message"></span>

            <button @click="show=false">✕</button>

        </div>
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 p-6 md:p-8">
            <div class="flex flex-col gap-1">
                <h2 class="text-slate-900 dark:text-slate-100 text-2xl sm:text-3xl font-black leading-tight tracking-tight">
                    Manajemen Galeri
                </h2>

                <p class="text-slate-500 text-sm sm:text-base">
                    Meninjau, mengkategorikan, dan memperbarui aset industri publik
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                <button x-data @click="$dispatch('open-modal','add-gallery')"
                    class="flex items-center justify-center gap-2 rounded-lg h-10 px-4 w-full sm:w-auto bg-primary text-white font-bold text-sm shadow-lg shadow-primary/20 hover:brightness-110 transition-all">
                    <span class="material-symbols-outlined text-sm">add_photo_alternate</span>
                    Unggah Aset
                </button>

            </div>
        </div>
        <div class="px-6 md:px-8 pb-4">
            <div class="flex flex-wrap gap-2 border-b border-primary/10 pb-4">
                <a href="{{ route('gallery.index') }}"
                    class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider
                                {{ request('category') ? 'bg-white border border-primary/10 text-slate-600' : 'bg-primary text-white' }}">
                    Semua Aset
                </a>
                <a href="{{ route('gallery.index', ['category' => 'factory']) }}"
                    class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider
                            {{ request('category') == 'factory' ? 'bg-primary text-white' : 'bg-white border border-primary/10 text-slate-600 hover:border-primary' }}">
                    Pabrik
                </a>
                <a href="{{ route('gallery.index', ['category' => 'production']) }}"
                    class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider
                        {{ request('category') == 'production' ? 'bg-primary text-white' : 'bg-white border border-primary/10 text-slate-600 hover:border-primary' }}">
                    Produksi
                </a>
                <a href="{{ route('gallery.index', ['category' => 'packaging']) }}"
                    class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider
                    {{ request('category') == 'packaging' ? 'bg-primary text-white' : 'bg-white border border-primary/10 text-slate-600 hover:border-primary' }}">
                    Kemasan
                </a>
                <a href="{{ route('gallery.index', ['category' => 'quality-control']) }}"
                    class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider
                {{ request('category') == 'quality-control' ? 'bg-primary text-white' : 'bg-white border border-primary/10 text-slate-600 hover:border-primary' }}">
                    Kontrol kualitas
                </a>
            </div>
        </div>
        <div class="px-6 md:px-8 py-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($galleries as $gallery)

                                <div
                                    class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm border border-primary/5 hover:shadow-md transition-all group">

                                    <div class="relative aspect-video overflow-hidden">

                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                            src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->category }}" />

                                        <div
                                            class="absolute top-3 left-3 px-2 py-1 bg-black/60 backdrop-blur-sm rounded text-[10px] text-white font-bold uppercase tracking-wider">
                                            {{ $gallery->category }}
                                        </div>

                                    </div>

                                    <div class="p-4">

                                        <div class="flex justify-between items-start mb-3">
                                            <div>
                                                <p class="text-slate-400 text-xs mt-0.5">
                                                    Di upload {{ $gallery->created_at->format('M d, Y') }}
                                                </p>
                                            </div>

                                            <span
                                                class="text-[10px] font-bold uppercase
                                                                                                                            {{ $gallery->is_active ? 'text-green-600' : 'text-red-500' }}">
                                                {{ $gallery->is_active ? 'Aktif' : 'Tidak aktif' }}
                                            </span>

                                        </div>

                                        <div class="flex justify-between items-center pt-3 border-t border-primary/5">

                                            <div x-data="{
                        toggleStatus(url){
                            fetch(url,{
                                method:'POST',
                                headers:{
                                    'X-CSRF-TOKEN':'{{ csrf_token() }}',
                                    'Accept':'application/json'
                                },
                                body:new URLSearchParams({
                                    _method:'PUT'
                                })
                            }).then(()=>{
                                window.location.reload()
                            })
                        }
                    }" class="flex items-center justify-center gap-2">

                                                <label class="relative inline-flex items-center cursor-pointer">

                                                    <input type="checkbox" class="sr-only peer" {{ $gallery->is_active ? 'checked' : '' }}
                                                        @click="toggleStatus('{{ route('cpl.gallery-update-status', $gallery->id) }}')">

                                                    <div class="w-9 h-5 bg-slate-200 rounded-full peer dark:bg-slate-700
                    peer-checked:after:translate-x-full peer-checked:after:border-white
                    after:content-[''] after:absolute after:top-[2px] after:left-[2px]
                    after:bg-white after:border-gray-300 after:border after:rounded-full
                    after:h-4 after:w-4 after:transition-all peer-checked:bg-primary">
                                                    </div>

                                                </label>

                                                <span class="text-[10px] font-bold uppercase text-primary">
                                                    {{ $gallery->is_active ? 'Aktif' : 'Tidak aktif' }}
                                                </span>

                                            </div>

                                            <form action="{{ route('cpl.gallery-delete', $gallery->id) }}" method="POST"
                                                onsubmit="return confirm('Delete this image?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="text-slate-400 hover:text-red-500 transition-colors">
                                                    <span class="material-symbols-outlined text-lg">delete</span>
                                                </button>
                                            </form>
                                        </div>

                                    </div>

                                </div>

                @endforeach
            </div>
            <div
                class="mt-10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-t border-primary/10 pt-6">

                <p class="text-sm text-slate-500 text-center sm:text-left">
                    Showing
                    <span class="font-bold text-slate-900 dark:text-slate-100">
                        {{ $galleries->firstItem() }}
                    </span>
                    to
                    <span class="font-bold text-slate-900 dark:text-slate-100">
                        {{ $galleries->lastItem() }}
                    </span>
                    of
                    <span class="font-bold text-slate-900 dark:text-slate-100">
                        {{ $galleries->total() }}
                    </span>
                    assets
                </p>
                <!-- Pagination -->
                <div class="flex items-center justify-center sm:justify-end gap-2 flex-wrap">

                    {{-- Previous --}}
                    @if ($galleries->onFirstPage())

                        <button
                            class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-400 disabled:opacity-50"
                            disabled>
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>

                    @else

                        <a href="{{ $galleries->previousPageUrl() }}"
                            class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-600 hover:text-primary">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </a>

                    @endif


                    {{-- Page Numbers --}}
                    @foreach ($galleries->getUrlRange(1, $galleries->lastPage()) as $page => $url)

                        @if ($page == $galleries->currentPage())

                            <span
                                class="size-9 flex items-center justify-center rounded border border-primary/10 bg-primary text-white font-bold text-sm">
                                {{ $page }}
                            </span>

                        @else

                            <a href="{{ $url }}"
                                class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-600 hover:bg-primary/5 font-bold text-sm">
                                {{ $page }}
                            </a>

                        @endif

                    @endforeach


                    {{-- Next --}}
                    @if ($galleries->hasMorePages())

                        <a href="{{ $galleries->nextPageUrl() }}"
                            class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-600 hover:text-primary">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </a>

                    @else

                        <button
                            class="size-9 flex items-center justify-center rounded border border-primary/10 bg-white text-slate-400 disabled:opacity-50"
                            disabled>
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>

                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection
@include('admin.pages.galleries._form')