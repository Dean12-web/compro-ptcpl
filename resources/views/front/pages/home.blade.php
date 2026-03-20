@extends('front.layouts.app')
@section('title', __('seo.home.title'))
@section('meta_description', __('seo.home.description'))
@section('meta_keywords', __('seo.home.keywords'))
@section('og_title', __('seo.home.title'))
@section('og_description', __('seo.home.description'))

@section('content')
    <section class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-20 py-12 md:py-24">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1 flex flex-col gap-8">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider">
                        <span class="material-symbols-outlined text-sm">eco</span>
                        {{ $home_hero->items->firstWhere('field_key', 'badge')?->field_value }}
                    </div>
                    <h1 class="text-slate-900 text-5xl md:text-7xl font-black leading-[1.1] tracking-tight">
                        {{ $home_hero->items->firstWhere('field_key', 'title')?->field_value }}
                    </h1>
                    <p class="text-slate-600 text-lg md:text-xl max-w-xl leading-relaxed">
                        {{ $home_hero->items->firstWhere('field_key', 'description')?->field_value }}
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#quotation"
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-base font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                            {{__('general.home_quote_button')}}
                        </a>
                        <a href="{{ route('products', app()->getLocale()) }}"
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-white border-2 border-slate-200 text-slate-900 text-base font-bold hover:bg-slate-50 transition-all">
                            {{__('general.home_products_button')}}
                        </a>
                    </div>
                </div>
                <div class="flex-1 w-full">
                    <div class="relative group">
                        <div
                            class="absolute -inset-4 bg-accent/20 rounded-xl blur-2xl group-hover:blur-3xl transition-all opacity-50">
                        </div>
                        <div
                            class="relative bg-slate-200 aspect-[4/3] rounded-xl overflow-hidden shadow-2xl border-8 border-white">
                            <div class="w-full h-full bg-cover bg-center"
                                data-alt="Close up of stacked recycled paper egg trays"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDzXnWsd2n9exarAj4Xt1hj2K2MU9jUIfdourbirUWsXGCrZoUWHq10LqD0OFT0kuToXMFhJ3tOrjMjedF-FMY2PWiIEBoSIfNZJo64U3OkLP2g39uVYHYF9p4x_OI02WwAzy8rESTbED3z6gwXSkw1aTxA3G--yl3LNrNgztoAoSuquD6vMaXsWXoB5eU4cYI4RXgkjuGzFTXb4p_Rb8Krzk1nQr6FjiasmrTCKORQnp--tTn5nqrMlL0fVMyaZcUVI8XcRxEEQjBN')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-background-light py-20 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-6 md:px-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col gap-4 p-8 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">factory</span>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-1">
                            {{ $home_highlight->items->firstWhere('field_key', 'item_1_title')?->field_value }}
                        </p>
                        <p class="text-slate-900 text-3xl font-black">
                            {{ $home_highlight->items->firstWhere('field_key', 'item_1_value')?->field_value }}
                        </p>
                        <div class="mt-2 flex items-center gap-1 text-emerald-600 font-bold text-sm">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            <span>{{ $home_highlight->items->firstWhere('field_key', 'item_1_description')?->field_value }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 p-8 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">public</span>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-1">
                            {{ $home_highlight->items->firstWhere('field_key', 'item_2_title')?->field_value }}
                        </p>
                        </p>
                        <p class="text-slate-900 text-3xl font-black">
                            {{ $home_highlight->items->firstWhere('field_key', 'item_2_value')?->field_value }}
                        </p>
                        <div class="mt-2 flex items-center gap-1 text-emerald-600 font-bold text-sm">
                            <span class="material-symbols-outlined text-sm">language</span>
                            <span>{{ $home_highlight->items->firstWhere('field_key', 'item_2_description')?->field_value }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 p-8 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">verified</span>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-1">
                            {{ $home_highlight->items->firstWhere('field_key', 'item_3_title')?->field_value }}
                        </p>
                        <p class="text-slate-900 text-3xl font-black">
                            {{ $home_highlight->items->firstWhere('field_key', 'item_3_value')?->field_value }}
                        </p>
                        <div class="mt-2 flex items-center gap-1 text-emerald-600 font-bold text-sm">
                            <span class="material-symbols-outlined text-sm">workspace_premium</span>
                            <span>{{ $home_highlight->items->firstWhere('field_key', 'item_3_description')?->field_value }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-20">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-slate-900 text-4xl font-black tracking-tight mb-4">
                        {{ $home_global_reach->items->firstWhere('field_key', 'title')?->field_value }}
                    </h2>
                    <p class="text-slate-600 text-lg">
                        {{ $home_global_reach->items->firstWhere('field_key', 'description')?->field_value }}
                    </p>
                </div>
            </div>
            <div
                class="w-full bg-slate-100 aspect-video md:aspect-[21/9] rounded-2xl overflow-hidden border border-slate-200 relative group shadow-inner">
                <div class="absolute inset-0 bg-cover bg-center opacity-80"
                    data-alt="Abstract world map showing shipping routes and global connections" data-location="World Map"
                    style="background-image: url('{{ asset('images/globe-cpl.png') }}')">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
            </div>
        </div>
    </section>
    <section class="bg-primary text-white py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="flex flex-col gap-8">
                    <h2 class="text-4xl md:text-5xl font-black leading-tight">
                        {{ $home_cta_->items->firstWhere('field_key', 'title')?->field_value }}
                    </h2>
                    <p class="text-white/80 text-lg leading-relaxed">
                        {{ $home_cta_->items->firstWhere('field_key', 'description')?->field_value }}
                    </p>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-4">
                            <div class="size-10 rounded-full bg-white/10 flex items-center justify-center">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <span class="text-lg font-medium">{{ $setting->company_email }}</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="size-10 rounded-full bg-white/10 flex items-center justify-center">
                                <span class="material-symbols-outlined">call</span>
                            </div>
                            <span class="text-lg font-medium">{{ $setting->company_phone }}</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 md:p-10 shadow-2xl" id="quotation">
                    <h3 class="text-slate-900 text-2xl font-bold mb-6">{{ __('general.home_request_title') }}</h3>
                    @if(session('success'))
                        <div class="mb-6 rounded-xl border border-emerald-300 bg-emerald-50/80 p-4 text-sm text-emerald-900">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="mb-6 rounded-xl border border-red-200 bg-red-50/80 p-4 text-sm text-red-900">
                            <ul class="list-disc space-y-1 pl-5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('contact.store', app()->getLocale()) }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="origin" value="home">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1">
                                <label
                                    class="text-slate-500 text-xs font-bold uppercase tracking-widest">{{ __('general.full_name') }}</label>
                                <input name="name" value="{{ old('name') }}"
                                    class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                    placeholder="John Doe" type="text" />
                                @error('name')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <label
                                    class="text-slate-500 text-xs font-bold uppercase tracking-widest">{{ __('general.company_name') }}</label>
                                <input name="company" value="{{ old('company') }}"
                                    class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                    placeholder="{{__('general.placeholder_company')}}" type="text" />
                                @error('company')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1">
                                <label
                                    class="text-slate-500 text-xs font-bold uppercase tracking-widest">{{ __('general.country') }}</label>
                                <input
                                    name="country"
                                    value="{{ old('country') }}"
                                    class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                    placeholder="Indonesia" type="text" />
                                @error('country')
                                    <span class="text-xs text-red-600">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <label
                                    class="text-slate-500 text-xs font-bold uppercase tracking-widest">{{ __('general.email_address') }}</label>
                                <input
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                    placeholder="john@company.com" type="email" />
                                    @error('email')
                                        <span class="text-xs text-red-600">
                                            {{ $message }}
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label
                                class="text-slate-500 text-xs font-bold uppercase tracking-widest">{{__('general.phone_number')}}</label>
                            <input
                                name="phone"
                                value="{{ old('phone') }}"
                                class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                placeholder="+62 812 3456 7890" type="tel">
                            @error('phone')
                                <span class="text-xs text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-1">
                            <label
                                class="text-slate-500 text-xs font-bold uppercase tracking-widest">{{__('general.inquiry_message')}}</label>
                            <textarea
                                name="message"
                                class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                placeholder="{{ __('general.placeholder_message') }}" rows="4">
                                {{ old('message') }}
                            </textarea>
                            @error('message')
                                <span class="text-xs text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button
                            class="w-full rounded-lg bg-accent text-white h-14 font-black text-lg shadow-lg hover:bg-accent/90 transition-all uppercase tracking-widest"
                            type="submit">
                            {{ __('general.home_request_button') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
