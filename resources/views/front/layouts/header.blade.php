<header
    class="flex items-center justify-between whitespace-nowrap border-b border-primary/10 bg-white/80 backdrop-blur-md px-6 md:px-20 py-4 sticky top-0 z-50"
    x-data="{ current: '{{ Route::currentRouteName() }}' }"
>
    <div class="flex items-center gap-3 text-primary">
        <div class="size-8">
            <img src="{{ asset('images/logo/icon_cpl.png') }}" alt="log_cendana_paper_egg_tray">
        </div>
        <a href="{{ route('home', app()->getLocale()) }}" class="text-slate-700 font-bold uppercase tracking-tight
          text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl
          leading-tight whitespace-nowrap">
            <span class="sm:hidden">
                Cendana
            </span>
            <span class="hidden sm:inline lg:hidden">
                Cendana Egg Tray
            </span>
            <span class="hidden lg:inline">
                Cendana Paper Egg Tray
            </span>

        </a>
    </div>
    @php
        $navLinks = [
            'home' => __('general.home'),
            'about' => __('general.about'),
            'products' => __('general.products'),
            'production' => __('general.production'),
            'exports' => __('general.export'),
            'sustainability' => __('general.sustainability'),
            'gallery' => __('general.gallery'),
        ];
    @endphp
    <nav class="hidden lg:flex items-center gap-6">
        @foreach ($navLinks as $name => $label)
            <a
                :class="current === '{{ $name }}' ? 'text-primary font-bold' : 'text-slate-700'"
                class="hover:text-primary transition-colors text-sm font-semibold"
                href="{{ route($name, app()->getLocale()) }}"
            >
                {{ $label }}
            </a>
        @endforeach
    </nav>
    <div class="flex items-center gap-3">
        <a href="{{ route('contact', app()->getLocale()) }}"
            :class="[
                'hidden sm:flex min-w-[100px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold transition-transform active:scale-95',
                current === 'contact' ? 'ring-2 ring-offset-2 ring-primary/60 shadow-lg' : ''
            ]"
        >
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
