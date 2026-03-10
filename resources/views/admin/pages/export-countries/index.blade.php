@extends('admin.layouts.app')
@section('title', 'Negara Ekspor')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Negara Ekspor</h2>
@endsection
@section('content')
    <div x-data="ExportCountryTable()" x-init="load()" class="flex-1 overflow-y-auto p-8">
        <div x-data="{ show:false, message:'' }"
            @notify.window="message=$event.detail; show=true; setTimeout(()=>show=false,3000)" x-show="show" x-transition
            class="mt-4 mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 flex justify-between">

            <span x-text="message"></span>

            <button @click="show=false">✕</button>

        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Manajemen Negara Ekspor</h1>
                <p class="text-slate-500 mt-1">Konfigurasikan parameter dan status pengiriman untuk pasar tujuan
                    internasional.</p>
            </div>
            <button x-data @click="$dispatch('open-modal','add-export-country')"
                class="flex items-center gap-2 bg-primary text-white px-6 py-2.5 rounded-lg font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-sm">add</span>
                <span>Tambah Negara Eskpor Baru</span>
            </button>
        </div>
        <!-- Filters and Search -->
        <div class="bg-white dark:bg-background-dark border border-primary/10 rounded-xl p-4 mb-6 shadow-sm">

            <div class="flex flex-col lg:flex-row gap-4">

                <!-- Search -->
                <div class="flex-1 relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                        search
                    </span>

                    <input type="text" placeholder="Cari nama negara..." x-model.debounce.400ms="search"
                        class="w-full pl-10 pr-4 py-2 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none bg-background-light/30 transition-all text-sm">
                </div>
            </div>

        </div>
        <!-- Countries Table -->
        <div class="bg-white dark:bg-background-dark border border-primary/10 rounded-xl shadow-sm overflow-hidden">

            <!-- Table Wrapper -->
            <div class="overflow-x-auto">
                <x-admin.table :columns="$columns" />
            </div>

            <!-- Pagination -->
            <div
                class="px-6 py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-t border-primary/10">

                <!-- Info -->
                <p class="text-xs text-slate-500 text-center sm:text-left">
                    Showing
                    <span x-text="pagination.from ?? 0"></span>
                    to
                    <span x-text="pagination.to ?? 0"></span>
                    of
                    <span x-text="pagination.total ?? 0"></span>
                    countries
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
@include('admin.pages.export-countries._form')
<script>
    function ExportCountryTable() {
        return {
            rows: [],
            pagination: {},

            search: '',
            status: '',
            region: '',

            sort: 'created_at',
            direction: 'desc',
            page: 1,

            init() {
                this.load()

                this.$watch('search', () => {
                    this.page = 1
                    this.load()
                })
            },

            async load() {
                let params = new URLSearchParams({
                    search: this.search,
                    sort: this.sort,
                    direction: this.direction,
                    status: this.status,
                    region: this.region,
                    page: this.page
                })
                const res = await fetch(`/cpl-admin/export-country-data?${params}`)

                const data = await res.json()

                this.rows = data.rows
                this.pagination = data.pagination
            },

            async deleteExportCountry(id){
                if(!confirm('Hapus Negara Ekspor Ini?')) return

                const rest = await fetch(`/cpl-admin/export-country-delete/${id}`,{
                    method:'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })

                const data = await rest.json()

                if(data.success){
                    this.load()
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