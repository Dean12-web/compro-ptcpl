<div x-data="{ current: '{{ Route::currentRouteName() }}', mobileOpen: false }"
    @keydown.escape.window="mobileOpen = false" class="relative"
    x-init="(() => {
        const updateHeaderHeight = () => {
            const height = $refs.frontHeader?.offsetHeight ?? 0;
            document.documentElement.style.setProperty('--front-header-height', `${height}px`);
        };
        updateHeaderHeight();
        window.addEventListener('resize', updateHeaderHeight);
    })()">
    <header
        x-ref="frontHeader"
        class="flex items-center justify-between whitespace-nowrap border-b border-primary/10 bg-white/80 backdrop-blur-md px-6 md:px-20 py-4 fixed inset-x-0 top-0 z-50">
        <div class="flex items-center gap-3 text-primary">
            <div class="size-11">
                <img src="{{ asset('images/logo/logo_cpl.png') }}" alt="log_cendana_paper_egg_tray">
            </div>
            <a href="{{ route('home', app()->getLocale()) }}" class="text-slate-700 font-bold uppercase tracking-tight
          text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl
          leading-tight whitespace-nowrap">
                <span class="sm:hidden">
                    Cendana
                </span>
                <span class="hidden sm:inline lg:hidden">
                    Cendana Putera Lestari
                </span>
                <span class="hidden lg:inline">
                    Cendana Putera Lestari
                </span>

            </a>
        </div>
        @php
            $navLinks = [
                'home' => __('general.home'),
                'about' => __('general.about'),
                'products' => __('general.products'),
                'production' => __('general.production'),
                'testimonials' => __('general.testimonials'),
                'exports' => __('general.export'),
                'sustainability' => __('general.sustainability'),
                'gallery' => __('general.gallery'),
            ];
        @endphp
        <nav class="hidden lg:flex items-center gap-6">
            @foreach ($navLinks as $name => $label)
                <a :class="current === '{{ $name }}' ? 'text-primary font-bold' : 'text-slate-700'"
                    class="hover:text-primary transition-colors text-sm font-semibold"
                    href="{{ route($name, app()->getLocale()) }}">
                    {{ $label }}
                </a>
            @endforeach
        </nav>
        <div class="flex items-center gap-3">
            <a href="{{ route('contact', app()->getLocale()) }}" :class="[
                    'hidden sm:flex min-w-[100px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold transition-transform active:scale-95',
                    current === 'contact' ? 'ring-2 ring-offset-2 ring-primary/60 shadow-lg' : ''
                ]">
                {{ __('general.contact') }}
            </a>
            @php
                $switchLocale = app()->getLocale() === 'en' ? 'id' : 'en';
                $params = request()->route()->parameters();
            @endphp

            <div x-data="{ open: false }" class="relative hidden sm:block">

                <!-- Button -->
                <button @click="open = !open" @click.outside="open = false"
                    class="flex items-center gap-2 rounded-lg h-10 px-3 bg-slate-100 text-slate-700 text-xs font-bold border border-slate-200 hover:bg-slate-200 transition">
                    <span class="material-symbols-outlined text-lg">language</span>

                    <span>
                        {{ app()->getLocale() === 'en' ? 'English' : 'Indonesia' }}
                    </span>

                    <span class="material-symbols-outlined text-sm">expand_more</span>
                </button>

                <!-- Dropdown -->
                <div x-show="open" x-transition
                    class="absolute right-0 mt-2 w-40 bg-white border border-slate-200 rounded-lg shadow-lg overflow-hidden z-50">
                    <a href="{{ route(Route::currentRouteName(), array_merge($params, ['locale' => 'id'])) }}"
                        class="flex items-center gap-2 px-3 py-2 text-sm hover:bg-slate-100 transition">
                        🇮🇩 Indonesia
                    </a>

                    <a href="{{ route(Route::currentRouteName(), array_merge($params, ['locale' => 'en'])) }}"
                        class="flex items-center gap-2 px-3 py-2 text-sm hover:bg-slate-100 transition">
                        🇺🇸 English
                    </a>
                </div>
            </div>


            <button type="button" @click="mobileOpen = true" aria-controls="mobile-menu-panel"
                :aria-expanded="mobileOpen.toString()" class="lg:hidden p-2 text-slate-900">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </header>

    <div x-cloak x-show="mobileOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="lg:hidden" aria-labelledby="mobile-menu-title" role="dialog"
        aria-modal="true">
        <div class="fixed inset-0 z-40 bg-slate-900/60" @click="mobileOpen = false"></div>
        <div class="fixed inset-y-0 left-0 z-50 w-full max-w-xs border-r border-slate-200 bg-white p-6 shadow-2xl overflow-y-auto"
            id="mobile-menu-panel">
            <div class="flex items-center justify-between mb-6">
                <h2 id="mobile-menu-title" class="text-base font-semibold uppercase tracking-[0.3em] text-slate-700">
                    Menu
                </h2>
                <button type="button" @click="mobileOpen = false" aria-label="Close menu" class="p-2 text-slate-600">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <nav class="flex flex-col gap-4">
                @foreach ($navLinks as $name => $label)
                    <a @click="mobileOpen = false"
                        :class="current === '{{ $name }}' ? 'text-primary font-bold' : 'text-slate-700'"
                        class="text-base font-semibold hover:text-primary transition-colors"
                        href="{{ route($name, app()->getLocale()) }}">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>
            <div class="mt-6 flex flex-col gap-3">
                <a @click="mobileOpen = false" href="{{ route('contact', app()->getLocale()) }}"
                    :class="current === 'contact' ? 'ring-2 ring-offset-2 ring-primary/60 shadow-lg' : ''"
                    class="flex items-center justify-center rounded-lg border border-slate-200 bg-primary px-4 py-3 text-sm font-bold text-white transition-transform active:scale-95">
                    {{ __('general.contact') }}
                </a>
                <div x-data="{ openLang: false }" class="relative">

                    <!-- Trigger -->
                    <button @click="openLang = !openLang"
                        class="w-full flex items-center justify-between gap-2 rounded-lg border border-slate-200 bg-slate-100 px-3 py-3 text-sm font-bold text-slate-700">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">language</span>
                            <span>
                                {{ app()->getLocale() === 'en' ? 'English' : 'Indonesia' }}
                            </span>
                        </div>

                        <span class="material-symbols-outlined text-sm">expand_more</span>
                    </button>

                    <!-- Dropdown -->
                    <div x-show="openLang" x-transition
                        class="mt-2 w-full bg-white border border-slate-200 rounded-lg shadow overflow-hidden">
                        <a @click="mobileOpen = false"
                            href="{{ route(Route::currentRouteName(), array_merge($params, ['locale' => 'id'])) }}"
                            class="block px-4 py-3 text-sm hover:bg-slate-100">
                            🇮🇩 Indonesia
                        </a>

                        <a @click="mobileOpen = false"
                            href="{{ route(Route::currentRouteName(), array_merge($params, ['locale' => 'en'])) }}"
                            class="block px-4 py-3 text-sm hover:bg-slate-100">
                            🇺🇸 English
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
