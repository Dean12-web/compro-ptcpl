<footer class="bg-slate-900 text-white py-12 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-1 flex flex-col gap-4">
                <div class="flex items-center gap-3 text-primary">
                    <div class="size-12">
                        <img src="{{ asset('images/logo/icon_cpl.png') }}" alt="log_cendana_paper_egg_tray">
                    </div>
                    <h2 class="text-white text-lg font-bold uppercase tracking-tight">Cendana Paper Egg Tray</h2>
                </div>
                <p class="text-slate-400 text-xs leading-relaxed">
                    {{ __('general.footer_title') }}
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">{{ __('general.footer_quick_links') }}</h4>
                <ul class="flex flex-col gap-3 text-slate-400 text-sm">
                    <li><a class="hover:text-primary transition-colors" href="#">{{ __('general.footer_about_us') }}</a>
                    </li>
                    <li><a class="hover:text-primary transition-colors"
                            href="#">{{ __('general.footer_our_products') }}</a></li>
                    <li><a class="hover:text-primary transition-colors"
                            href="#">{{ __('general.footer_production_process') }}</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">{{ __('general.footer_export') }}</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">{{ __('general.footer_complience') }}</h4>
                <ul class="flex flex-col gap-3 text-slate-400 text-sm">
                    <li><a class="hover:text-primary transition-colors"
                            href="#">{{ __('general.footer_sustainability') }}</a></li>
                    <li><a class="hover:text-primary transition-colors"
                            href="#">{{ __('general.footer_pricacy_policy') }}</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">{{ __('general.footer_social_media') }}</h4>
                @php
                    $socialLinks = [
                        'facebook' => $setting?->facebook,
                        'instagram' => $setting?->instagram,
                        'tiktok' => $setting?->tiktok,
                    ];
                @endphp
                <div class="flex gap-6 items-center">
                    @foreach ($socialLinks as $network => $url)
                        @if ($url)
                            <a href="{{ $url }}" class="hover:opacity-80 transition" target="_blank" rel="noreferrer noopener">
                                <img src="https://cdn.simpleicons.org/{{ $network }}/ffffff" alt="{{ $network }}"
                                    class="w-10 h-10">
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div
            class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 text-xs">
            <p>© 2026 PT Cendana Putera Lestari. All rights reserved.</p>
        </div>
    </div>
</footer>
