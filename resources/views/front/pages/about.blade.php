@extends('front.layouts.app')
@section('title', __('seo.about.title'))
@section('meta_description', __('seo.about.description'))
@section('meta_keywords',__('seo.about.keywords'))
@section('og_title', __('seo.about.title'))
@section('og_description', __('seo.about.description'))

@section('content')
<div class="flex flex-col items-center">
    <div class="max-w-[1200px] w-full">
        <section class="px-4 md:px-10 py-8">
            <div class="relative min-h-[400px] w-full overflow-hidden rounded-xl bg-primary/20">
                <div class="absolute inset-0 bg-cover bg-center"
                    data-alt="Modern high-tech industrial manufacturing facility interior"
                    style='background-image: linear-gradient(to top, rgba(26, 28, 22, 0.8), transparent), url({{ $about_hero->items->where('field_key','hero_image')->first()->field_value ?? "https://lh3.googleusercontent.com/aida-public/AB6AXuCblB03g3ukou34gITWacwvADek1HAAzdFR18u5whyvOVc_o0lNHVny1wVLMQAkvUhmp4ab0VDPWC0XeFye35GbNYbxbuvb8dUuP4VT59pPXGk8UR296dIR9csw83D3Kma4QqiB29nC1gvBDbOytOsNn2X4fldpswTqiA_UrB5zksXDctcuwa-tV1MwjPhzLUTV2LnZEeH2bERT36H5ltg7OMLZHn9tvrAljx3P8-jJRTCXJd_QLl97dyjAFwcgTA5izmVSkr19TyaT" }} );'>
                </div>
                <div class="absolute bottom-0 left-0 p-8 md:p-12 w-full">
                    <span
                        class="bg-primary text-white px-3 py-1 rounded text-xs font-bold uppercase tracking-widest mb-4 inline-block">{{ $about_hero->items->where('field_key','badge')->first()->field_value ?? 'Sejak 1995' }}</span>
                    <h1 class="text-white text-4xl md:text-6xl font-black tracking-tight max-w-4xl">{{ $about_hero->items->where('field_key', 'title')->first()->field_value ?? '' }}</h1>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-10 py-12 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-2">{{ __('general.about_company_profile') }}
                </h2>
                <h3 class="text-slate-900 text-3xl md:text-4xl font-black leading-tight mb-6">
                    {{ $about_company_profile->items->where('field_key', 'title')->first()->field_value ?? '' }}
                </h3>
                <p class="text-slate-600 text-lg leading-relaxed mb-6">
                   {{ $about_company_profile->items->where('field_key', 'description_1')->first()->field_value ?? '' }}
                </p>
                <p class="text-slate-600 text-lg leading-relaxed">
                   {{ $about_company_profile->items->where('field_key', 'description_2')->first()->field_value ?? '' }}
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-primary/5 p-8 rounded-xl border border-primary/10">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">rocket_launch</span>
                    <h4 class="font-bold text-xl mb-2 text-slate-900">{{ __('general.about_mission') }}</h4>
                    <p class="text-sm text-slate-600">
                        {{ $about_company_profile->items->where('field_key', 'mission_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div class="bg-primary/5 p-8 rounded-xl border border-primary/10">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">visibility</span>
                    <h4 class="font-bold text-xl mb-2 text-slate-900">{{ __('general.about_vision') }}</h4>
                    <p class="text-sm text-slate-600">
                        {{ $about_company_profile->items->where('field_key', 'vision_description')->first()->field_value ?? '' }}
                    </p>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-10 py-16 bg-primary/5 rounded-3xl mx-4 md:mx-10 my-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-2">{{ __('general.about_core_values') }}
                </h2>
                <h3 class="text-slate-900 text-3xl font-black mb-4">{{ __('general.about_principles') }}</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-10 rounded-2xl shadow-sm border border-primary/5 text-center">
                    <div
                        class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">verified</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">{{ __('general.about_quality') }}</h4>
                    <p class="text-slate-600">
                        {{ $about_core_values->items->where('field_key', 'value_1_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div
                    class="bg-white p-10 rounded-2xl shadow-sm border border-primary/5 text-center">
                    <div
                        class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">eco</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">{{ __('general.about_sustainability') }}</h4>
                    <p class="text-slate-600">
                        {{ $about_core_values->items->where('field_key', 'value_2_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div
                    class="bg-white p-10 rounded-2xl shadow-sm border border-primary/5 text-center">
                    <div
                        class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">gavel</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">{{ __('general.about_integrity') }}</h4>
                    <p class="text-slate-600">
                        {{ $about_core_values->items->where('field_key', 'value_3_description')->first()->field_value ?? '' }}
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection