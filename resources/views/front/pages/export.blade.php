@extends('front.layouts.app')
@section('title', __('seo.exports.title'))
@section('meta_description', __('seo.exports.description'))
@section('meta_keywords', __('seo.exports.keywords'))
@section('og_title', __('seo.exports.title'))
@section('og_description', __('seo.exports.description'))

@section('content')
    <div class="flex-grow">
        <section class="relative w-full mb-8">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="relative h-[500px] w-full bg-cover bg-center flex flex-col items-center justify-center text-center px-4"
                data-alt="Large container ship loaded with cargo boxes crossing the ocean at sunset"
                style="background-image: url({{ $export_hero->items->where('field_key','hero_image')->first()->field_value ?? asset('images/export.png') }});">
                <div class="relative z-20 max-w-3xl flex flex-col gap-6">
                    <span
                        class="px-3 py-1 bg-accent/90 text-white text-xs font-bold uppercase tracking-wider rounded-full w-fit mx-auto">{{ __('general.export_hero_button') }}</span>
                    <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">
                        {{ $export_hero->items->where('field_key', 'title')->first()->field_value ?? '' }}
                    </h1>
                    <p class="text-white/90 text-lg md:text-xl font-medium max-w-xl mx-auto">
                       {{ $export_hero->items->where('field_key', 'description')->first()->field_value ?? '' }}
                    </p>
                </div>
            </div>
        </section>
        <section class="py-12 px-6 lg:px-20 -mt-10 relative z-30">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-4">
                <div
                    class="bg-surface-light p-6 rounded-xl shadow-lg border-l-4 border-primary flex flex-col justify-between h-full">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined text-primary text-3xl">public</span>
                        <h3 class="text-lg font-bold text-slate-700">{{ $export_stats->items->where('field_key', 'stat_1_title')->first()->field_value ?? '' }}</h3>
                    </div>
                    <p class="text-4xl font-black text-slate-900">{{ $export_stats->items->where('field_key', 'stat_1_value')->first()->field_value ?? '' }}+</p>
                    <p class="text-sm text-slate-500 mt-1">{{ $export_stats->items->where('field_key', 'stat_1_description')->first()->field_value ?? '' }}</p>
                </div>
                <div
                    class="bg-surface-light p-6 rounded-xl shadow-lg border-l-4 border-accent flex flex-col justify-between h-full">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined text-accent text-3xl">inventory_2</span>
                        <h3 class="text-lg font-bold text-slate-700">{{ $export_stats->items->where('field_key', 'stat_2_title')->first()->field_value ?? '' }}</h3>
                    </div>
                    <p class="text-4xl font-black text-slate-900">{{ $export_stats->items->where('field_key', 'stat_2_value')->first()->field_value ?? '' }}+</p>
                    <p class="text-sm text-slate-500 mt-1">{{ $export_stats->items->where('field_key', 'stat_2_description')->first()->field_value ?? '' }}</p>
                </div>
                <div
                    class="bg-surface-light p-6 rounded-xl shadow-lg border-l-4 border-primary-light flex flex-col justify-between h-full">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined text-primary-light text-3xl">handshake</span>
                        <h3 class="text-lg font-bold text-slate-700">{{ $export_stats->items->where('field_key', 'stat_3_title')->first()->field_value ?? 'Partner Reliability' }}</h3>
                    </div>
                    <p class="text-4xl font-black text-slate-900">{{ $export_stats->items->where('field_key', 'stat_3_value')->first()->field_value ?? '99,8%' }}</p>
                    <p class="text-sm text-slate-500 mt-1">{{ $export_stats->items->where('field_key', 'stat_3_description')->first()->field_value ?? 'On-time delivery rate' }}</p>
                </div>
            </div>
        </section>
        <section class="py-16 px-6 lg:px-20 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    <div class="w-full md:w-1/2 flex flex-col gap-6">
                        <h2 class="text-3xl font-bold text-slate-900">{{ $export_markets->items->where('field_key', 'title')->first()->field_value ?? 'Global Market Reach' }}
                        </h2>
                        <p class="text-slate-600 leading-relaxed">
                           {{ $export_markets->items->where('field_key', 'description')->first()->field_value ?? 'Our export services connect you to key global markets with efficient and reliable shipping solutions.' }}
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">{{ $export_markets->items->where('field_key', 'market_1')->first()->field_value ?? 'Southeast Asia (Fast Lane)' }}</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">{{ $export_markets->items->where('field_key', 'market_2')->first()->field_value ?? 'North America' }}</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">{{ $export_markets->items->where('field_key', 'market_3')->first()->field_value ?? 'Australia &amp; Oceania' }}</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">{{ $export_markets->items->where('field_key', 'market_4')->first()->field_value ?? 'Western Europe' }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 relative">
                        <div class="aspect-video w-full rounded-2xl overflow-hidden shadow-2xl bg-slate-100 relative">
                            <img alt="World map emphasizing global trade routes and connectivity"
                                class="w-full h-full object-cover opacity-90"
                                data-alt="World map showing connection nodes and flight paths glowing on dark background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1JrS4BdPK_CpodhhjW2CeUGjZz1HZFth42AbWOuiZ0ZOlknqstUIIzHeS704RF09BVBAkQ6OI0ZdwDBqySCOUvsQzWmCIqB7Fn8pN7tgeLzAd4YbrBX64hyS1EcDi0Kv20KEpsceubLb3-VjrEkYbZdG5kKw5BtOULzPwGbQwC-A8ftbaRTafr6sZfd7624P1xLRr-Cwv7qBzlok1GZ0QSLcX4veFLXZcZkaWnTJ0Rr6mRR1oZ1WsmXAlmw5BHwUXvitvxzG608QW" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-6 lg:px-20 bg-background-light">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-slate-900 mb-4">{{ __('general.export_shipping_title') }}
                    </h2>
                    <p class="text-slate-600 max-w-2xl mx-auto">{{ __('general.export_shipping_subtitle') ?? $shipping->items->where('field_key', 'shipping_subtitle')->first()->field_value  }}</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="bg-surface-light p-8 rounded-xl border border-slate-200 hover:border-primary transition-colors group">
                        <div
                            class="size-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <span class="material-symbols-outlined text-3xl">directions_boat</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">{{ $export_shipping->items->where('field_key', 'shipping_1_title')->first()->field_value ?? '' }}</h3>
                        <p class="text-slate-600 mb-4 text-sm leading-relaxed">
                            {{ $export_shipping->items->where('field_key', 'shipping_1_description')->first()->field_value ?? '' }}
                        </p>

                    </div>
                    <div
                        class="bg-surface-light p-8 rounded-xl border border-slate-200 hover:border-primary transition-colors group">
                        <div
                            class="size-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <span class="material-symbols-outlined text-3xl">view_module</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">{{ $export_shipping->items->where('field_key', 'shipping_2_title')->first()->field_value ?? '' }}</h3>
                        <p class="text-slate-600 mb-4 text-sm leading-relaxed">
                            {{ $export_shipping->items->where('field_key', 'shipping_2_description')->first()->field_value ?? '' }}
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-surface-light p-8 rounded-xl border border-slate-200 hover:border-primary transition-colors group">
                        <div
                            class="size-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <span class="material-symbols-outlined text-3xl">local_shipping</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">{{ $export_shipping->items->where('field_key', 'shipping_3_title')->first()->field_value ?? '' }}</h3>
                        <p class="text-slate-600 mb-4 text-sm leading-relaxed">
                            {{ $export_shipping->items->where('field_key', 'shipping_3_description')->first()->field_value ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-6 lg:px-20 bg-white">
            <div class="max-w-5xl mx-auto">
                <div class="flex items-center gap-3 mb-8">
                    <span class="material-symbols-outlined text-accent text-4xl">schedule</span>
                    <h2 class="text-3xl font-bold text-slate-900">{{__('general.export_estimate_lead_times')}}</h2>
                </div>
                <div class="overflow-hidden rounded-xl border border-slate-200 shadow-sm">
                    <table class="w-full text-left text-sm text-slate-600">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="px-6 py-4 font-bold uppercase tracking-wider" scope="col">{{ __('general.export_region') }}</th>
                                <th class="px-6 py-4 font-bold uppercase tracking-wider" scope="col">{{ __('general.export_ports') }}</th>
                                <th class="px-6 py-4 font-bold uppercase tracking-wider" scope="col">{{ __('general.export_transit_time') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 bg-surface-light">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">{{$export_lead_times->items->where('field_key', 'region_1')->first()->field_value ?? ''}}</td>
                                <td class="px-6 py-4">{{ $export_lead_times->items->where('field_key', 'ports_1')->first()->field_value ?? '' }}</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">{{ $export_lead_times->items->where('field_key', 'transit_time_1')->first()->field_value ?? '' }}</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">{{ $export_lead_times->items->where('field_key', 'region_2')->first()->field_value ?? '' }}</td>
                                <td class="px-6 py-4">{{ $export_lead_times->items->where('field_key', 'ports_2')->first()->field_value ?? '' }}</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">{{ $export_lead_times->items->where('field_key', 'transit_time_2')->first()->field_value ?? '' }}</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">{{ $export_lead_times->items->where('field_key', 'region_3')->first()->field_value ?? '' }}</td>
                                <td class="px-6 py-4">{{ $export_lead_times->items->where('field_key', 'ports_3')->first()->field_value ?? '' }}</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">{{ $export_lead_times->items->where('field_key', 'transit_time_3')->first()->field_value ?? '' }}</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">{{ $export_lead_times->items->where('field_key', 'region_4')->first()->field_value ?? '' }}</td>
                                <td class="px-6 py-4">{{ $export_lead_times->items->where('field_key', 'ports_4')->first()->field_value ?? '' }}</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">{{ $export_lead_times->items->where('field_key', 'transit_time_4')->first()->field_value ?? '' }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="mt-4 text-xs text-slate-500 italic">* {{ __('general.export_notes') }}</p>
            </div>
        </section>

        <section class="py-16 px-6 lg:px-20 bg-background-light">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-3">{{ __('general.sustainability_packaging_title') }}</h2>
                        <p class="text-slate-600 max-w-xl">{{ $export_packaging->items->where('field_key', 'packaging_subtitle')->first()->field_value ?? '' }}
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="group relative overflow-hidden rounded-xl h-64 md:h-80 shadow-md">
                        <img alt="Stack of cardboard boxes on a wooden pallet wrapped in plastic"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Warehouse pallets wrapped in industrial shrink wrap ready for loading"
                            src="{{ $export_packaging->items->where('field_key', 'packaging_1_image')->first()->field_value ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuDqEqiv37l_o1qPfuGlbkMYDjCuGCRWHbUrZ7WXUn0TIXeeSiJxcC9ud-UvPLJLzEdU69430sMaFvGagtMOQBLTLmPQZ9h8awafix-_2mDbtYR0h2E6VnZbJvYToZ00utBdFn85e1kOuNXA4JvZcrl-ZxpQGOMTaz7fw1cZNg9eOKJt3nsqLUBYSuaL9n_PeEptz0O-pcwiNN5tb8yo3ItxQ3o3p8XWv4NFsskK5ooBJOnkra-XIuMd63wiyA8jhOfpP2NxOb5HIVqv' }}" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="text-white font-bold text-xl mb-1">{{ $export_packaging->items->where('field_key', 'packaging_1_title')->first()->field_value ?? '' }}</h3>
                            <p class="text-white/80 text-sm">{{ $export_packaging->items->where('field_key', 'packaging_1_description')->first()->field_value ?? '' }}</p>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-xl h-64 md:h-80 shadow-md">
                        <img alt="Interior of a shipping container loaded with boxes"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Inside view of a shipping container efficiently loaded with cargo boxes"
                            src="{{ $export_packaging->items->where('field_key', 'packaging_2_image')->first()->field_value ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuCoCMfbgz0u3B_Cgy7Kz_EeDTVXBS8vvpn2FFCnG38fJ4oDlVQdBbdZg2zudOKfZB2euaBdVw8edOrpQPLhxMlXOYdutCUy3NkYjjIWWvlZ6qvlzDtSmHyJub4PpUXRM9vYWQBoDpX5phojJL0dFBh333NuzRLZQ-sbaGDZkINL2HONGWGKv6MYwd0HXgW5hIr_kvUhg27dFkKk8nXx2FTdKR_zEZvW4oF3fHySlR_p3xi76N9ivsK5xp2X_aULQhQieotdVpdl3flM' }}" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="text-white font-bold text-xl mb-1">{{ $export_packaging->items->where('field_key', 'packaging_2_title')->first()->field_value ?? '' }}</h3>
                            <p class="text-white/80 text-sm">{{ $export_packaging->items->where('field_key', 'packaging_2_description')->first()->field_value ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 px-6 lg:px-20 bg-primary-light/20">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6">{{ $export_cta->items->where('field_key', 'title')->first()->field_value ?? '' }}</h2>
                <p class="text-lg text-slate-600 mb-8 max-w-2xl mx-auto">
                  {{ $export_cta->items->where('field_key', 'description')->first()->field_value ?? '' }} 
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact', app()->getLocale()) }}"
                        class="bg-primary hover:bg-[#4a5c30] text-white px-8 py-4 rounded-lg text-lg font-bold tracking-wide transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">request_quote</span>
                        {{ __('general.export_cta_button_2') }}
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection