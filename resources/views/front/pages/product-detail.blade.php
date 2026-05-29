@extends('front.layouts.app')
@section('title', __('seo.products.title'))
@section('meta_description', __('seo.products.description'))
@section('meta_keywords', __('seo.products.keywords'))
@section('og_title', __('seo.products.title'))
@section('og_description', __('seo.products.description'))

@section('content')

    @php
        $mainImageUrl = $product->primaryImage?->image_path
            ? asset('storage/' . $product->primaryImage?->image_path)
            : asset('images/egg_tray_default.png');
    @endphp

    <div class="flex-1 max-w-7xl mx-auto w-full px-4 md:px-20 py-8">
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-8">
            <a class="hover:text-primary transition-colors" href="{{ route('products',app()->getLocale()) }}">Products</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-900 font-semibold">{{ $product->name }}</span>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div class="space-y-4">
                <div
                    class="aspect-square rounded-xl bg-white overflow-hidden border border-slate-200 shadow-sm">
                    <div id="product-main-image" class="w-full h-full bg-center bg-no-repeat bg-contain p-4"
                        data-alt="Main view of stacked recycled egg trays"
                        style="background-image: url('{{ $mainImageUrl }}');">
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($product->images as $image )
                        @php
                            $thumbUrl = $image->image_path
                                ? asset('storage/' . $image->image_path)
                                : asset('images/egg_tray_default.png');
                        @endphp
                        <div class="aspect-square rounded-lg border-2 border-primary overflow-hidden cursor-pointer"
                            data-thumbnail-url="{{ $thumbUrl }}">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover"
                                data-alt="Close up of pulp material texture"
                                style="background-image: url('{{ $thumbUrl }}');">
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div>
                    <h1 class="text-4xl font-extrabold text-slate-900 leading-tight mb-4 tracking-tight">
                        {{ $product->name }}</h1>
                    <p class="text-lg text-slate-600 leading-relaxed">{{ $product->getDescriptionForLocale() }}</p>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div
                        class="flex flex-col items-center p-4 rounded-xl bg-primary/5 border border-primary/10">
                        <span class="material-symbols-outlined text-primary mb-2 text-3xl">eco</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">{{ $product_detail_features->items->where('field_key','feature_1_label')->first()->field_value ?? '' }}</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 rounded-xl bg-primary/5 border border-primary/10">
                        <span class="material-symbols-outlined text-primary mb-2 text-3xl">layers</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">{{$product_detail_features->items->where('field_key','feature_2_label')->first()->field_value ?? ''}}</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 rounded-xl bg-primary/5 border border-primary/10">
                        <span class="material-symbols-outlined text-primary mb-2 text-3xl">verified</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">{{$product_detail_features->items->where('field_key','feature_3_label')->first()->field_value ?? ''}}</span>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 border border-slate-100">
                    <h3 class="text-lg font-bold mb-4 text-slate-900 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">settings</span>
                        {{ __('general.technical_specifications') }}
                    </h3>
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <div>
                            <p class="text-sm text-slate-500">{{__('general.dimensions')}}</p>
                            <p class="font-medium">{{ $product->dimensions }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">{{ __('general.capacity') }}</p>
                            <p class="font-medium">{{$product->capacity}} {{__('general.eggs')}}</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">{{ __('general.unit_weight') }}</p>
                            <p class="font-medium">{{ $product->weight }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">{{ __('general.material_type') }}</p>
                            <p class="font-medium">{{$product->material ? __("general.{$product->material}") : '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const mainImage = document.getElementById('product-main-image');
                const thumbnails = document.querySelectorAll('[data-thumbnail-url]');

                thumbnails.forEach((thumbnail) => {
                    thumbnail.addEventListener('click', () => {
                        const url = thumbnail.dataset.thumbnailUrl;
                        if (!url || !mainImage) {
                            return;
                        }
                        mainImage.style.backgroundImage = `url('${url}')`;
                        thumbnails.forEach((thumb) => thumb.classList.remove('ring-2', 'ring-primary'));
                        thumbnail.classList.add('ring-2', 'ring-primary');
                    });
                });
            });
        </script>
        <section class="border-t border-slate-200 pt-16 mb-16">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">{{ $product_detail_choose->items->where('field_key','section_title')->first()->field_value ?? ''}}</h2>
                <p class="text-slate-600">{{ $product_detail_choose->items->where('field_key','section_description')->first()->field_value ?? '' }}</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">compost</span>
                    </div>
                    <h4 class="font-bold mb-2">{{ $product_detail_choose->items->where('field_key','why_1_content_title')->first()->field_value ?? '' }}</h4>
                    <p class="text-sm text-slate-500">{{$product_detail_choose->items->where('field_key', 'why_1_content_description')->first()->field_value ?? ''}}</p>
                </div>
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">health_and_safety</span>
                    </div>
                    <h4 class="font-bold mb-2">{{$product_detail_choose->items->where('field_key', 'why_2_content_title')->first()->field_value ?? ''}}</h4>
                    <p class="text-sm text-slate-500">{{$product_detail_choose->items->where('field_key', 'why_2_content_description')->first()->field_value ?? ''}}</p>
                </div>
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">architecture</span>
                    </div>
                    <h4 class="font-bold mb-2">{{$product_detail_choose->items->where('field_key', 'why_3_content_title')->first()->field_value ?? ''}}</h4>
                    <p class="text-sm text-slate-500">{{$product_detail_choose->items->where('field_key', 'why_3_content_description')->first()->field_value ?? ''}}</p>
                </div>
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <h4 class="font-bold mb-2">{{$product_detail_choose->items->where('field_key', 'why_4_content_title')->first()->field_value ?? ''}}</h4>
                    <p class="text-sm text-slate-500">{{$product_detail_choose->items->where('field_key', 'why_4_content_description')->first()->field_value ?? ''}}</p>
                </div>
            </div>
        </section>
    </div>
@endsection
