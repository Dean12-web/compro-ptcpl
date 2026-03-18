@extends('front.layouts.app')
@section('title', __('seo.products.title'))
@section('meta_description', __('seo.products.description'))
@section('meta_keywords', __('seo.products.keywords'))
@section('og_title', __('seo.products.title'))
@section('og_description', __('seo.products.description'))

@section('content')
    <div class="flex-1 lg:px-40 py-8 px-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-10">
            <div class="flex flex-col gap-2">
                <span
                    class="text-primary font-bold tracking-widest text-xs uppercase">{{ $product_hero->items->where('field_key', 'badge')->first()->field_value ?? '' }}</span>
                <h1 class="text-slate-900 text-5xl font-black leading-tight tracking-tight">
                    {{ $product_hero->items->where('field_key', 'title')->first()->field_value ?? '' }}
                </h1>
                <p class="text-slate-500 text-lg max-w-2xl">
                    {{ $product_hero->items->where('field_key', 'description')->first()->field_value ?? '' }}
                </p>
            </div>
        </div>
        <div x-data="productFilter('{{ route('products.data', app()->getLocale()) }}')" x-init="fetchProducts()">
            <div class="flex flex-wrap items-center justify-between gap-4 pb-8 border-b border-slate-200 mb-8">
                <div class="flex flex-wrap gap-3">
                    <div class="relative group">
                        <select x-model="filters.material" @change="fetchProducts()"
                            class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-white border border-slate-200 px-8 hover:border-primary transition-all">
                            <option value="">{{ __('general.all_materials') }}</option>
                            @foreach ($materials as $material)
                                <option value="{{ $material }}">{{ $material ? __("general.{$material}") : '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative group">
                        <select x-model="filters.capacity" @change="fetchProducts()"
                            class="flex h-10 items-center justify-center gap-x-3 rounded-lg bg-white border border-slate-200 px-8 hover:border-primary transition-all">
                            <option value="">{{ __('general.all_capacity') }}</option>
                            @foreach($capacities as $capacity)
                                <option value="{{ $capacity }}">{{ $capacity }} {{__('general.eggs')}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <select x-model="filters.sort" @change="fetchProducts()" class="h-10 border px-4 rounded-lg">
                            <option value="newest">{{ __('general.newest') }}</option>
                            <option value="oldest">{{ __('general.oldest') }}</option>
                            <option value="name_asc">{{ __('general.name_asc') }}</option>
                            <option value="name_desc">{{ __('general.name_desc') }}</option>
                        </select>
                </div>
            </div>
              <template x-if="loading">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <template x-for="i in 8">
                        <div class="animate-pulse bg-white rounded-xl border p-4 space-y-4">
                            <div class="w-full h-40 bg-slate-200 rounded-lg"></div>
                            <div class="h-4 bg-slate-200 rounded w-3/4"></div>
                            <div class="h-3 bg-slate-200 rounded w-1/2"></div>
                            <div class="h-3 bg-slate-200 rounded w-full"></div>
                        </div>
                    </template>
                </div>
            </template>
        <div x-html="productsHtml" @click="handlePagination($event)"></div>
        </div>
    </div>
@endsection
<script>
    function productFilter(url) {
        return {
            url: url,

            filters: {
                material: '',
                capacity: '',
                sort: 'newest',
                page: 1
            },

            loading: false,
            productsHtml: '',

            async fetchProducts(page = 1) {
                this.loading = true;
                this.filters.page = page;

                let params = new URLSearchParams(this.filters).toString();

                try {
                    let res = await fetch(`${this.url}?${params}`);
                    this.productsHtml = await res.text();

                    // update URL biar shareable
                    history.replaceState(null, '', '?' + params);

                } catch (e) {
                    console.error(e);
                }

            this.loading = false;
        },

        handlePagination(event) {
            const target = event.target.closest('[data-page]');

            if (!target) {
                return;
            }

            event.preventDefault();

            const page = Number(target.dataset.page);
            if (Number.isNaN(page)) {
                return;
            }

            this.fetchProducts(page);
        }
    }
}
</script>
