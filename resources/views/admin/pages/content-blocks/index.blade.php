@extends('admin.layouts.app')
@section('title', 'Konten web')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Konten Web</h2>
@endsection
@section('content')
    <div x-data="WebContentTable()" x-init="init()" class="flex-1 overflow-y-auto p-8">
        <div x-data="{ show:false, message:'' }"
            @notify.window="message=$event.detail; show=true; setTimeout(()=>show=false,3000)" x-show="show" x-transition
            class="mt-4 mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 flex justify-between">
            <span x-text="message"></span>
            <button @click="show=false">✕</button>
        </div>
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Konten Web</h1>
                <p class="text-slate-500 mt-1">Kelola dan edit blok konten langsung untuk situs web..</p>
            </div>
        </div>
        <div class="lg:col-span-8 flex flex-col gap-6">
            <!-- Tabs -->
            <div class="flex border-b border-primary/10 gap-8">
                <button @click="changeTab('home')" :class="tab==='home' 
                        ? 'border-b-2 border-primary text-primary'
                        : 'text-slate-400 hover:text-slate-600'" class="pb-3 font-bold text-sm">
                    Home
                </button>
                <button @click="changeTab('about')" :class="tab==='about'
                        ? 'border-b-2 border-primary text-primary'
                        : 'text-slate-400 hover:text-slate-600'" class="pb-3 font-medium text-sm">
                    About
                </button>
                <button @click="changeTab('product')" :class="tab==='product'
                        ? 'border-b-2 border-primary text-primary'
                        : 'text-slate-400 hover:text-slate-600'" class="pb-3 font-medium text-sm">
                    Product</button>
                <button @click="changeTab('production')" :class="tab==='production'
                        ? 'border-b-2 border-primary text-primary'
                        : 'text-slate-400 hover:text-slate-600'" class="pb-3 font-medium text-sm">
                    Production</button>
                <button @click="changeTab('export')" :class="tab==='export'
                        ? 'border-b-2 border-primary text-primary'
                        : 'text-slate-400 hover:text-slate-600'" class="pb-3 font-medium text-sm">
                    Export</button>
                <button @click="changeTab('sustainability')" :class="tab==='sustainability'
                        ? 'border-b-2 border-primary text-primary'
                        : 'text-slate-400 hover:text-slate-600'" class="pb-3 font-medium text-sm">
                    Sustainability
                </button>
                <button @click="changeTab('gallery')" :class="tab==='gallery'
                        ? 'border-b-2 border-primary text-primary'
                        : 'text-slate-400 hover:text-slate-600'" class="pb-3 font-medium text-sm">
                    Gallery</button>
            </div>
            <!-- Table -->
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
    </div>
@endsection
@include('admin.pages.content-blocks._form')
<script>
    function WebContentTable(){
        return {
            rows:[],
            pagination: {},

            tab:'home',

            search:'',
            sort:'created_at',
            direction:'desc',
            page:1,

            init(){
                this.load()

                this.$watch('search',()=>{
                    this.page = 1
                    this.load()
                })
            },
            changeTab(section){
                this.tab = section
                this.page = 1
                this.load()
            },

            async load(){
                let params = new URLSearchParams({
                    search: this.search,
                    sort:this.sort,
                    direction:this.direction,
                    page:this.page,
                    title:this.tab
                })

                const res = await fetch(`/cpl-admin/web-content-view?${params}`)

                const data = await res.json()

                this.rows = data.rows

                this.pagination = data.pagination
            },

            changeSort(field){
                if(this.sort === field){
                    this.direction = this.direction === 'asc' ? 'desc' : 'asc'
                }else{
                    this.sort = field
                    this.direction = 'asc'
                }

                this.load()
            },

            goTo(page){
                this.page = page
                this.load()
            }

        }
    }
</script>