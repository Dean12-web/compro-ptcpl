@extends('admin.layouts.app')
@section('title', 'Products')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Produk</h2>
@endsection
@section('page-actions')
    <button x-data @click="$dispatch('open-modal','add-product')"
        class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-bold transition-all shadow-sm">

        <span class="material-symbols-outlined !text-lg">add</span>

        <span class="hidden sm:inline">
            Tambah Produk
        </span>

    </button>
@endsection
@section('content')
    <div x-data="productTable()" x-init="load()" class="p-8 max-w-7xl mx-auto w-full space-y-6  overflow-y-auto ">
        @if(session('success'))
            <div x-data="{ show:true }" x-show="show" x-transition
                class="mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 flex justify-between">

                <span>{{ session('success') }}</span>

                <button @click="show=false">
                    ✕
                </button>

            </div>
        @endif
        <!-- Page Title & Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-primary/10 shadow-sm">
                <p class="text-sm text-slate-500 font-medium">Total Produk</p>
                <h3 class="text-3xl font-black mt-1" x-text="stats.total_products"></h3>
                <div class="mt-2 flex items-center gap-1 text-xs text-primary font-bold">
                    <span class="material-symbols-outlined !text-sm">trending_up</span>
                    <span x-text="'+' + stats.this_month + ' Bulan ini'"></span>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-primary/10 shadow-sm">
                <p class="text-sm text-slate-500 font-medium">Produk Aktif</p>
                <h3 class="text-3xl font-black mt-1 text-primary" x-text="stats.active_products"></h3>
                <div class="mt-2 flex items-center gap-1 text-xs text-slate-400">
                    <span x-text="stats.active_percent + '% dari total trays'"></span>
                </div>
            </div>
        </div>
        <!-- Filters and Search -->
        <div
            class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 bg-white dark:bg-slate-800/50 p-4 rounded-xl border border-primary/10 shadow-sm">

            <!-- Search -->
            <div class="relative w-full lg:w-96">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                    search
                </span>

                <input type="text" placeholder="Cari nama produk..." x-model.debounce.400ms="search"
                    class="w-full pl-10 pr-4 py-2 bg-background-light dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all">
            </div>

            <!-- Filters -->
            <div class="flex flex-col sm:flex-row sm:flex-wrap items-start sm:items-center gap-3 w-full lg:w-auto">

                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <span class="material-symbols-outlined !text-lg">filter_list</span>
                    Filter:
                </div>

                <select x-model="status" @change="page = 1; load()"
                    class="w-full sm:w-auto bg-background-light dark:bg-slate-900 border border-primary/10 rounded-lg py-2 px-3 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none">
                    <option value="">Semua status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>

                <select x-model="material" @change="page = 1; load()"
                    class="w-full sm:w-auto bg-background-light dark:bg-slate-900 border border-primary/10 rounded-lg py-2 px-3 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none">
                    <option>Semua Material</option>
                     <option value="paper-pulp">Pulp Kertas</option>
                    <option value="plastic-egg-tray">Rak Telur Plastik</option>
                    <option value="styrofoam-tray">Rak Telur Styrofoam</option>
                    <option value="natural-fiber">Serat Alami</option>
                </select>

            </div>

        </div>
        <!-- Products Table -->
        <div class="bg-white dark:bg-slate-800/50 rounded-xl border border-primary/10 shadow-sm overflow-hidden">
            <div class="max-h-[500px] overflow-y-auto overflow-x-auto">
                <x-admin.table :columns="$columns" />
            </div>
            <!-- Pagination -->
            <div
                class="px-6 py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-t border-primary/10">

                <!-- Info -->
                <p class="text-xs text-slate-500 text-center sm:text-left">
                    Showing 1 to 4 of 124 products
                </p>

                <!-- Pagination -->
                <div class="flex items-center justify-center sm:justify-end gap-1 flex-wrap">

                    <button @click="goTo(pagination.current_page - 1)" :disabled="pagination.current_page <= 1"
                        class="px-2 py-1 rounded border border-primary/10 text-slate-400 hover:bg-primary/5 transition-colors">
                        <span class="material-symbols-outlined !text-lg">chevron_left</span>
                    </button>

                    <template x-for="page in pagination.last_page" :key="page">
                        <button @click="goTo(page)" :class="page === pagination.current_page
                ? 'bg-primary text-white'
                : 'border'" class="px-3 py-1 rounded text-xs">

                            <span x-text="page"></span>

                        </button>

                    </template>

                    <button @click="goTo(pagination.current_page + 1)"
                        :disabled="pagination.current_page >= pagination.last_page"
                        class="px-2 py-1 rounded border border-primary/10 text-slate-400 hover:bg-primary/5 transition-colors">
                        <span class="material-symbols-outlined !text-lg">chevron_right</span>
                    </button>

                </div>

            </div>
        </div>
    </div>
@endsection
@include('admin.pages.products._form')
<script>
    function productTable() {
        return {
            rows: [],
            pagination: {},

            stats: {
                total_products: 0,
                active_products: 0,
                this_month: 0,
                active_percent: 0
            },

            search: '',
            status: '',
            material: '',

            sort: 'created_at',
            direction: 'desc',
            page: 1,

            init() {
                this.load()
                this.loadStats()

                this.$watch('search', () => {
                    this.page = 1
                    this.load()
                })
                
                //reload pages
                window.addEventListener('product-updated', () => {
                    this.load()
                    this.loadStats()
                })
            },

            async load() {
                let params = new URLSearchParams({
                    search: this.search,
                    sort: this.sort,
                    direction: this.direction,
                    material: this.material,
                    status: this.status,
                    page: this.page
                })
                const res = await fetch(`/cpl-admin/products-data?${params}`)

                const data = await res.json()

                this.rows = data.rows
                this.pagination = data.pagination
            },

            async loadStats() {
                const res = await fetch('/cpl-admin/products-stats')
                const data = await res.json()

                this.stats = data
            },

            async deleteProduct(id) {
                if (!confirm('Hapus produk ini?')) return

                const res = await fetch(`/cpl-admin/products-data/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                const data = await res.json()

                if (data.success) {
                    this.load()
                    this.loadStats()
                }
            },

            changeSort(field) {
                if (this.sort === field) {
                    this.direction = this.direction === 'asc' ? 'desc' : 'asc'
                } else {
                    this.sort = field
                    this.direction = 'asc'
                }

                this.load()
            },

            goTo(page) {
                this.page = page
                this.load()
            }
        }
    }
</script>