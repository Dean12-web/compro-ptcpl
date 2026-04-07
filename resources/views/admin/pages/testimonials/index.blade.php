@extends('admin.layouts.app')
@section('title', 'Testimoni')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Testimoni</h2>
@endsection
@section('page-actions')
    <button x-data @click="$dispatch('reset-testimonial-form'); $dispatch('open-modal','add-testimonial')"
        class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-sm font-bold transition-all shadow-sm">
        <span class="material-symbols-outlined text-sm">add</span>
        <span>Tambah Testimoni</span>
    </button>
@endsection
@section('content')
    <div x-data="testimonialsTable()" x-init="init()" class="flex-1 overflow-y-auto p-8 space-y-6">
        <div x-data="{ show: false, message: '' }"
            @notify.window="message = $event.detail; show = true; setTimeout(() => show = false, 3000)" x-show="show"
            x-transition
            class="mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 flex justify-between">

            <span x-text="message"></span>

            <button @click="show = false">✕</button>

        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Testimoni</h1>
                <p class="text-slate-500 mt-1">Testimoni dari pelanggan tentang produk atau layanan.</p>
            </div>
        </div>
        <div class="bg-white dark:bg-background-dark border border-primary/10 rounded-xl p-4 shadow-sm">
            <div class="flex flex-col lg:flex-row gap-4">
                <div class="flex-1 relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                        search
                    </span>

                    <input type="text" placeholder="Cari berdasarkan nama, perusahaan, atau negara..." x-model.debounce.400ms="search"
                        class="w-full pl-10 pr-4 py-2 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none bg-background-light/30 transition-all text-sm">
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-background-dark border border-primary/10 rounded-xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <x-admin.table :columns="$columns" />
            </div>

            <div class="px-6 py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-t border-primary/10">
                <p class="text-xs text-slate-500 text-center sm:text-left">
                    Showing
                    <span x-text="pagination.from ?? 0"></span>
                    to
                    <span x-text="pagination.to ?? 0"></span>
                    of
                    <span x-text="pagination.total ?? 0"></span>
                    testimoni
                </p>
                <div class="flex items-center justify-center sm:justify-end gap-1 flex-wrap">
                    <button @click="goTo(pagination.current_page - 1)"
                        :disabled="pagination.current_page <= 1"
                        class="px-2 py-1 rounded border border-primary/10 text-slate-400 hover:bg-primary/5 transition-colors disabled:opacity-50">
                        <span class="material-symbols-outlined !text-lg">chevron_left</span>
                    </button>
                    <template x-for="page in pagination.last_page" :key="page">
                        <button @click="goTo(page)" :class="page === pagination.current_page ? 'bg-primary text-white' : 'border'"
                            class="px-3 py-1 rounded text-xs border border-primary/10">
                            <span x-text="page"></span>
                        </button>
                    </template>
                    <button @click="goTo(pagination.current_page + 1)"
                        :disabled="pagination.current_page >= pagination.last_page"
                        class="px-2 py-1 rounded border border-primary/10 text-slate-400 hover:bg-primary/5 transition-colors disabled:opacity-50">
                        <span class="material-symbols-outlined !text-lg">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('admin.pages.testimonials._form')
<script>
    function testimonialsTable() {
        return {
            rows: [],
            pagination: {
                current_page: 1,
                last_page: 1,
                total: 0,
                from: 0,
                to: 0
            },
            search: '',
            sort: 'created_at',
            direction: 'desc',
            page: 1,

            init() {
                this.load()

                this.$watch('search', () => {
                    this.page = 1
                    this.load()
                })

                window.addEventListener('testimonial-updated', () => {
                    this.page = 1
                    this.load()
                })
            },

            async load() {
                try {
                    const params = new URLSearchParams({
                        search: this.search,
                        sort: this.sort,
                        direction: this.direction,
                        page: this.page
                    })

                    const res = await fetch(`/cpl-admin/testimony-view?${params}`)

                    if (!res.ok) {
                        throw new Error(`Request failed with status ${res.status}`)
                    }

                    const data = await res.json()

                    this.rows = data.rows ?? []
                    this.pagination = data.pagination ?? this.pagination
                } catch (error) {
                    console.error('Error Loading Testimony:', error)
                }
            },

            goTo(page) {
                const lastPage = this.pagination.last_page ?? 1

                if (!page || page < 1 || page > lastPage || page === this.pagination.current_page) {
                    return
                }

                this.page = page
                this.load()
            },

            async deleteTestimonial(id) {
                if (!confirm('Hapus testimoni ini?')) {
                    return
                }

                try {
                    const res = await fetch(`/cpl-admin/testimonials/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        }
                    })

                    const data = await res.json()

                    if (!res.ok) {
                        throw new Error(data.message || 'Gagal menghapus testimoni')
                    }

                    window.dispatchEvent(new CustomEvent('notify', { detail: data.message }))
                    this.load()
                } catch (error) {
                    console.error('Delete Testimonial Error:', error)
                }
            },

            changeSort(field) {
                if (this.sort === field) {
                    this.direction = this.direction === 'asc' ? 'desc' : 'asc'
                } else {
                    this.sort = field
                    this.direction = 'asc'
                }

                this.page = 1
                this.load()
            }
        }
    }
</script>
