@extends('front.layouts.app')
@section('title', __('seo.production.title'))
@section('meta_description', __('seo.production.description'))
@section('meta_keywords',__('seo.production.keywords'))
@section('og_title', __('seo.production.title'))
@section('og_description', __('seo.production.description'))

@section('content')
<div class="flex-1">
    <section class="relative h-[600px] w-full flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="High-tech industrial automated factory interior"
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBD2b6JV9cZg4TKUhYbkwJXL8hpMioIVtTZOCn0_M8Z8Q8Vna9XR_4w2Sds1WBS6nUPXBK1zT_zNnKgWhJJW2lCS9KLI1P0XMuNWs_gqN-GyiwIMG-n0mDgKACOR1QrRRgwy7CchPPPfd2yjGQI8OuK1NOZOo3rgCxKBeTMIykScfEz3qf9wwEhorInIl683wZEeUg6XCvV4-KNbQr65lTaVyUyIbXC-ePfiTVyTUixqBFjhcu3HdaYNN-IqyvOErI12DfYJhpsB47A");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                {{ $production_hero->items->where('field_key', 'title')->first()->field_value ?? '' }}
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal mb-8 max-w-2xl mx-auto">
                {{ $production_hero->items->where('field_key', 'description')->first()->field_value ?? '' }}
            </p>
        </div>
    </section>
    <section class="py-24 px-6 md:px-20 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-3">{{ __('general.production_work_flow') }}</h2>
                <h3 class="text-slate-900 text-3xl md:text-4xl font-bold">{{ __('general.production_process') }}</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                <div class="absolute top-12 left-0 w-full h-0.5 bg-primary/10 hidden md:block"></div>
                <div class="relative group">
                    <div
                        class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">recycling</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">{{ $production_steps->items->where('field_key', 'step_1_title')->first()->field_value ?? '' }}</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        {{ $production_steps->items->where('field_key', 'step_1_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div class="relative group">
                    <div
                        class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">precision_manufacturing</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">{{ $production_steps->items->where('field_key', 'step_2_title')->first()->field_value ?? '' }}</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        {{ $production_steps->items->where('field_key', 'step_2_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div class="relative group">
                    <div
                        class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">thermostat</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">{{ $production_steps->items->where('field_key', 'step_3_title')->first()->field_value ?? '' }}</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        {{ $production_steps->items->where('field_key', 'step_3_description')->first()->field_value ?? '' }}
                    </p>
                </div>
                <div class="relative group">
                    <div
                        class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">verified</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">{{ $production_steps->items->where('field_key', 'step_4_title')->first()->field_value ?? '' }}</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        {{ $production_steps->items->where('field_key', 'step_4_description')->first()->field_value ?? '' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-neutral-soft/10">
        <div class="max-w-6xl mx-auto px-6 md:px-20">
            <div class="bg-primary rounded-2xl overflow-hidden flex flex-col md:flex-row shadow-2xl">
                <div class="p-12 md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-white text-3xl font-bold mb-6">{{ $production_factory_capacity->items->where('field_key', 'section_title')->first()->field_value ?? '' }}</h3>
                    <div class="grid grid-cols-1 gap-8">
                        <div class="flex items-start gap-4">
                            <div class="text-accent">
                                <span class="material-symbols-outlined text-4xl">speed</span>
                            </div>
                            <div>
                                <p class="text-white text-3xl font-black">{{ $production_factory_capacity->items->where('field_key', 'capacity_1_value')->first()->field_value ?? '' }}</p>
                                <p class="text-white/70 text-sm uppercase tracking-wider">{{ $production_factory_capacity->items->where('field_key', 'capacity_1_label')->first()->field_value ?? '' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="text-accent">
                                <span class="material-symbols-outlined text-4xl">settings_input_component</span>
                            </div>
                            <div>
                                <p class="text-white text-3xl font-black">{{ $production_factory_capacity->items->where('field_key', 'capacity_2_value')->first()->field_value ?? '' }}</p>
                                <p class="text-white/70 text-sm uppercase tracking-wider">{{ $production_factory_capacity->items->where('field_key', 'capacity_2_label')->first()->field_value ?? '' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="text-accent">
                                <span class="material-symbols-outlined text-4xl">update</span>
                            </div>
                            <div>
                                <p class="text-white text-3xl font-black">{{ $production_factory_capacity->items->where('field_key', 'capacity_3_value')->first()->field_value ?? '' }}</p>
                                <p class="text-white/70 text-sm uppercase tracking-wider">{{ $production_factory_capacity->items->where('field_key', 'capacity_3_label')->first()->field_value ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 min-h-[300px] bg-cover bg-center"
                    data-alt="Industrial robotic production line moving fast"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDRQyzN4KWNTrId7etbRo43FsScg9oX4RbbJMyZu152_P1-yHxHlS3VLQjeSXP2bwko8pmiKUFsMSixTZQiQV9xyXJZJnH1iRWywTriAhbHD3CyNppw_vhtQzB3GbxKOqRZjED84TuZmVid3cRn3ZE1yu45qydmBVRtJSfUkuyDQcZC848428iz1dySsisi-CzL7s3AUt9-p7gZlLdN42R7XZvolLJxZVcQFB4wgQDboU7DMSEpjrtgYCLJbgDIdW3HO_s06rnJZy-V");'>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 md:px-20 bg-background-light">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row gap-16 items-center">
                <div class="md:w-full">
                    <h2 class="text-primary text-center text-sm font-bold uppercase tracking-widest mb-3">{{ __('general.production_quality_control') }}</h2>
                    <h3 class="text-slate-900 text-4xl font-bold mb-6 leading-tight text-center">
                        {{ $production_quality_control->items->where('field_key', 'title')->first()->field_value ?? '' }}
                    </h3>
                    <p class="text-slate-600 text-lg mb-8">
                        {{ $production_quality_control->items->where('field_key', 'description')->first()->field_value ?? '' }}
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                            <span class="material-symbols-outlined text-primary">fitness_center</span>
                            <div>
                                <p class="font-bold">{{ $production_quality_control->items->where('field_key', 'check_1_title')->first()->field_value ?? '' }}</p>
                                <p class="text-sm text-slate-500">{{ $production_quality_control->items->where('field_key', 'check_1_description')->first()->field_value ?? '' }}</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                            <span class="material-symbols-outlined text-primary">bomb</span>
                            <div>
                                <p class="font-bold">{{ $production_quality_control->items->where('field_key', 'check_2_title')->first()->field_value ?? '' }}</p>
                                <p class="text-sm text-slate-500">{{ $production_quality_control->items->where('field_key', 'check_2_description')->first()->field_value ?? '' }}</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                            <span class="material-symbols-outlined text-primary">opacity</span>
                            <div>
                                <p class="font-bold">{{ $production_quality_control->items->where('field_key', 'check_3_title')->first()->field_value ?? '' }}</p>
                                <p class="text-sm text-slate-500">{{ $production_quality_control->items->where('field_key', 'check_3_description')->first()->field_value ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 md:px-20 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-3">{{ __('general.production_visual_flow_title') }}</h2>
            <h3 class="text-slate-900 text-4xl font-bold mb-16">{{ __('general.production_visual_flow_subtitle') }}</h3>
            <div class="bg-slate-50 p-8 md:p-12 rounded-3xl border border-primary/10 shadow-inner">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8 md:gap-4">
                    <div class="flex flex-col items-center text-center max-w-[150px]">
                        <div
                            class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined text-3xl">inbox</span>
                        </div>
                        <p class="font-bold text-sm">{{ __('general.production_visual_flow_content_1') }}</p>
                    </div>
                    <span class="material-symbols-outlined text-slate-300 hidden md:block">arrow_forward</span>
                    <span class="material-symbols-outlined text-slate-300 md:hidden">arrow_downward</span>
                    <div class="flex flex-col items-center text-center max-w-[150px]">
                        <div
                            class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined text-3xl">blender</span>
                        </div>
                        <p class="font-bold text-sm">{{ __('general.production_visual_flow_content_2') }}</p>
                    </div>
                    <span class="material-symbols-outlined text-slate-300 hidden md:block">arrow_forward</span>
                    <span class="material-symbols-outlined text-slate-300 md:hidden">arrow_downward</span>
                    <div class="flex flex-col items-center text-center max-w-[150px]">
                        <div
                            class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined text-3xl">layers</span>
                        </div>
                        <p class="font-bold text-sm">{{ __('general.production_visual_flow_content_3') }}</p>
                    </div>
                    <span class="material-symbols-outlined text-slate-300 hidden md:block">arrow_forward</span>
                    <span class="material-symbols-outlined text-slate-300 md:hidden">arrow_downward</span>
                    <div class="flex flex-col items-center text-center max-w-[150px]">
                        <div
                            class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined text-3xl">oven_gen</span>
                        </div>
                        <p class="font-bold text-sm">{{ __('general.production_visual_flow_content_4') }}</p>
                    </div>
                    <span class="material-symbols-outlined text-slate-300 hidden md:block">arrow_forward</span>
                    <span class="material-symbols-outlined text-slate-300 md:hidden">arrow_downward</span>
                    <div class="flex flex-col items-center text-center max-w-[150px]">
                        <div
                            class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center text-primary mb-4">
                            <span class="material-symbols-outlined text-3xl">inventory_2</span>
                        </div>
                        <p class="font-bold text-sm">{{ __('general.production_visual_flow_content_5') }}</p>
                    </div>
                    <span class="material-symbols-outlined text-slate-300 hidden md:block">arrow_forward</span>
                    <span class="material-symbols-outlined text-slate-300 md:hidden">arrow_downward</span>
                    <div class="flex flex-col items-center text-center max-w-[150px]">
                        <div
                            class="bg-accent/20 w-16 h-16 rounded-full flex items-center justify-center text-accent mb-4 border-2 border-accent">
                            <span class="material-symbols-outlined text-3xl">local_shipping</span>
                        </div>
                        <p class="font-bold text-sm">{{ __('general.production_visual_flow_content_6') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 md:px-20 bg-primary/5">
        <div class="max-w-4xl mx-auto text-center">
            <h3 class="text-3xl font-bold mb-8">{{ $production_cta_section->items->where('field_key', 'title')->first()->field_value ?? '' }}</h3>
            <p class="text-slate-600 mb-10 text-lg">
                {{ $production_cta_section->items->where('field_key', 'description')->first()->field_value ?? '' }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-accent text-white px-8 py-4 rounded-lg font-bold shadow-lg shadow-accent/30 hover:bg-accent/90 transition-all">{{ __('general.production_cta_button') }}</button>
            </div>
        </div>
    </section>
</div>
@endsection