@extends('front.layouts.app')
@section('title', __('seo.sustainability.title'))
@section('meta_description', __('seo.sustainability.description'))
@section('meta_keywords', __('seo.sustainability.keywords'))
@section('og_title', __('seo.sustainability.title'))
@section('og_description', __('seo.sustainability.description'))

@section('content')
    <div class="flex-1">
        <section class="px-4 md:px-20 py-8">
            <div
                class="relative min-h-[520px] flex flex-col items-start justify-end p-8 md:p-16 rounded-xl overflow-hidden bg-slate-900">
                <div class="absolute inset-0 opacity-60">
                    <img alt="Lush green forest aerial view" class="w-full h-full object-cover"
                        data-alt="Lush green forest canopy from aerial perspective"
                        src="{{ $sustainability_hero->items()->where('field_key', 'hero_image')->first()->field_value ?? asset('images/sustainability.png') }}" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="relative z-10 max-w-5xl space-y-6">
                    <h1 class="text-white text-5xl md:text-7xl font-black leading-[1.1] tracking-tight">
                        {{ $sustainability_hero->items()->where('field_key', 'title')->first()->field_value ?? ''}}
                    </h1>
                    <p class="text-slate-200 text-lg md:text-xl font-medium leading-relaxed max-w-xl">
                        {{ $sustainability_hero->items()->where('field_key', 'description')->first()->field_value ?? '' }}
                    </p>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-20 py-20 bg-white">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest">
                        <span class="material-symbols-outlined text-sm">eco</span>
                        {{ $sustainability_conscious_sourcing->items()->where('field_key', 'badge')->first()->field_value ?? '' }}
                    </div>
                    <h2 class="text-slate-900 text-4xl md:text-5xl font-black leading-tight">
                        {{ $sustainability_conscious_sourcing->items()->where('field_key', 'title')->first()->field_value ?? '' }}
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        {{ $sustainability_conscious_sourcing->items()->where('field_key', 'description')->first()->field_value ?? '' }}
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-secondary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-sm">check</span>
                            </span>
                            <span
                                class="text-slate-700 font-medium italic">{{ $sustainability_conscious_sourcing->items()->where('field_key', 'feature_1')->first()->field_value ?? '' }}</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-secondary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-sm">check</span>
                            </span>
                            <span
                                class="text-slate-700 font-medium italic">{{ $sustainability_conscious_sourcing->items()->where('field_key', 'feature_2')->first()->field_value ?? '' }}</span>
                        </li>
                    </ul>
                </div>
                <div class="relative group">
                    <div
                        class="absolute -inset-4 bg-primary/5 rounded-2xl rotate-2 group-hover:rotate-0 transition-transform">
                    </div>
                    @php
                        $feature2 = $sustainability_conscious_sourcing->items()
                            ->where('field_key', 'section_image')
                            ->first();
                    @endphp
                    <img alt="Close up of recycled paper pulp texture"
                        class="relative rounded-xl shadow-2xl w-full h-[500px] object-cover"
                        data-alt="Macro photography of raw recycled paper pulp texture"
                        src="{{ $feature2 && $feature2->field_value 
                            ? asset('storage/' . $feature2->field_value) 
                            : 'https://lh3.googleusercontent.com/aida-public/AB6AXuDWBsvjctdPWNdm01WtUJOhp-8JjiwwyzS5kiA3QhqYGBanal8DCIr-PBvk3SrUDjrGk8AgwWoXeYxlyMm2Nr8_TZHPvIZ8-BpvCrW5ZxUgct-p6ZNHbPG2WL9EHqsuAcw4W_cgm2xHdp-GkMXDDuX1jxSPjI_pbfMMZKuczSHNmOzgsM2wKH-DaHxOeD8RDyIsS0Bbx800WRLlUdNx9raC62YgG6iX9Zgd2OkjNXnt_z16Jd2R-rQ4BX13gJ8bXdANI9o4934jFFJV' }}"/>
                    </div>
            </div>
        </section>
        <section class="px-4 md:px-20 py-24 bg-background-light">
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
                <h2 class="text-slate-900 text-4xl font-black">
                    {{ $sustainability_circular_production->items()->where('field_key', 'title')->first()->field_value ?? '' }}
                </h2>
                <div class="h-1.5 w-24 bg-primary mx-auto rounded-full"></div>
                <p class="text-slate-600 text-lg">
                    {{ $sustainability_circular_production->items()->where('field_key', 'subtitle')->first()->field_value ?? '' }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 relative">
                <div
                    class="hidden md:block absolute top-1/4 left-0 right-0 h-0.5 border-t-2 border-dashed border-primary/20 -z-0">
                </div>
                <div
                    class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                    <div
                        class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined text-3xl">recycling</span>
                    </div>
                    <span
                        class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">{{ __('general.sustainability_production_step_1') }}</span>
                    <h3 class="text-slate-900 text-xl font-bold mb-3">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_1_title')->first()->field_value ?? '' }}
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_1_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div
                    class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                    <div
                        class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined text-3xl">water_drop</span>
                    </div>
                    <span
                        class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">{{ __('general.sustainability_production_step_2') }}</span>
                    <h3 class="text-slate-900 text-xl font-bold mb-3">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_2_title')->first()->field_value ?? '' }}
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_2_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div
                    class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                    <div
                        class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined text-3xl">precision_manufacturing</span>
                    </div>
                    <span
                        class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">{{ __('general.sustainability_production_step_3') }}</span>
                    <h3 class="text-slate-900 text-xl font-bold mb-3">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_3_title')->first()->field_value ?? '' }}
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_3_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div
                    class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                    <div
                        class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined text-3xl">wb_sunny</span>
                    </div>
                    <span
                        class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">{{ __('general.sustainability_production_step_4') }}</span>
                    <h3 class="text-slate-900 text-xl font-bold mb-3">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_4_title')->first()->field_value ?? '' }}
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        {{ $sustainability_circular_production->items()->where('field_key', 'step_4_description')->first()->field_value ?? '' }}
                    </p>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-20 py-24">
            <div
                class="bg-background-light rounded-3xl p-12 md:p-20 text-center relative overflow-hidden border border-primary/5">
                <div class="relative z-10 max-w-2xl mx-auto space-y-8">
                    <h2 class="text-slate-900 text-4xl md:text-5xl font-black">{{ $sustainability_cta->items()->where('field_key', 'title')->first()->field_value ?? '' }}</h2>
                    <p class="text-slate-600 text-lg">{{ $sustainability_cta->items()->where('field_key', 'description')->first()->field_value ?? '' }}</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                        <a href="{{ route('contact', app()->getLocale()) }}"
                            class="w-full sm:w-auto flex min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-base font-bold shadow-xl hover:scale-105 transition-all">
                            {{ __('general.sustainbility_cta_button') }}
                        </a>
                    </div>
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/5 rounded-full -translate-x-1/2 translate-y-1/2">
                </div>
                <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full translate-x-1/3 -translate-y-1/3">
                </div>
            </div>
        </section>
    </div>
@endsection