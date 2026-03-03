<header
    class="flex items-center justify-between whitespace-nowrap border-b border-primary/10 bg-white/80 backdrop-blur-md px-6 md:px-20 py-4 sticky top-0 z-50">
    <div class="flex items-center gap-3 text-primary">
        <div class="size-8">
           <img src="{{ asset('images/logo/icon_cpl.png') }}" alt="log_cendana_paper_egg_tray">
        </div>
        <h2 class="text-slate-600 text-xl font-bold leading-tight tracking-tight uppercase">
            <a href="{{ route('home', app()->getLocale()) }}">Cendana Paper Egg Tray</a></h2>
    </div>
    <nav class="hidden lg:flex items-center gap-6">
        <a class="text-slate-700 hover:text-primary text-sm font-semibold transition-colors"
            href="{{ route('home', app()->getLocale()) }}">{{ __('general.home') }}</a>
        <a class="text-slate-700 hover:text-primary text-sm font-semibold transition-colors"
            href="{{ route('about', app()->getLocale()) }}">{{__('general.about')}}</a>
        <a class="text-slate-700 hover:text-primary text-sm font-semibold transition-colors"
            href="{{ route('products',app()->getLocale()) }}">{{__('general.products')}}</a>
        <a class="text-slate-700 hover:text-primary text-sm font-semibold transition-colors"
            href="{{ route('production', app()->getLocale()) }}">{{__('general.production')}}</a>
        <a class="text-slate-700 hover:text-primary text-sm font-semibold transition-colors"
            href="{{ route('exports', app()->getLocale()) }}">{{ __('general.export') }}</a>
        <a class="text-slate-700 hover:text-primary text-sm font-semibold transition-colors"
            href="{{ route('sustainability', app()->getLocale()) }}">{{__('general.sustainability')}}</a>
        <a class="text-slate-700 hover:text-primary text-sm font-semibold transition-colors"
            href="{{ route('gallery', app()->getLocale()) }}">{{__('general.gallery')}}</a>
    </nav>
    <div class="flex items-center gap-3">
        <a href="{{ route('contact', app()->getLocale()) }}"
            class="hidden sm:flex min-w-[100px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold transition-transform active:scale-95">
            {{__('general.contact')}}
        </a>
        @php
            $switchLocale = app()->getLocale() === 'en' ? 'id' : 'en';
        @endphp
        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $switchLocale]) }}"
            class="flex items-center gap-2 rounded-lg h-10 px-3 bg-slate-100 text-slate-700 text-xs font-bold border border-slate-200">
            <span class="material-symbols-outlined text-lg">language</span>

            @if ($switchLocale === 'en')
                <span>English / Indonesia</span>
            @else
                <span>Indonesia / English</span>
            @endif
        </a>
        <button class="lg:hidden p-2 text-slate-900">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>
</header>