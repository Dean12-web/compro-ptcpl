@extends('front.layouts.app')
@section('title', __('seo.exports.title'))
@section('meta_description', __('seo.exports.description'))
@section('meta_keywords',__('seo.exports.keywords'))
@section('og_title', __('seo.exports.title'))
@section('og_description', __('seo.exports.description'))

@section('content')
    <div class="flex-grow">
        <section class="relative w-full">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="relative h-[500px] w-full bg-cover bg-center flex flex-col items-center justify-center text-center px-4"
                data-alt="Large container ship loaded with cargo boxes crossing the ocean at sunset"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBbwPSjiw6f6T1vLpKwj9K4m5ymdfdABgg8Qbbz1Lo12-Co-puklRO0ZmObpiLWTAbbEZYYodMrTB8bk8FeOZSqrEIsw91JgY--FP2X_DsfRAy11nTxpa5nAFDljxBpPAjkdxQX_MFcTHeKOCziWm0ZZO-Yfa3zwP7wtmlaPk5I8hfbFgZcZMSecLECcMSUGjT_7yBQn2zxwamL2SEWcLsqNEw7l1gM3Jtk7h8BVJnC_rNpIGyekhXE3YzOSEfXT9IdZ35GnGGYH7OW');">
                <div class="relative z-20 max-w-3xl flex flex-col gap-6">
                    <span
                        class="px-3 py-1 bg-accent/90 text-white text-xs font-bold uppercase tracking-wider rounded-full w-fit mx-auto">Worldwide
                        Shipping</span>
                    <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">
                        Global Logistics &amp; Export Excellence
                    </h1>
                    <p class="text-white/90 text-lg md:text-xl font-medium max-w-xl mx-auto">
                        Delivering premium egg tray solutions to 20+ countries with reliable, efficient, and secure
                        shipping standards.
                    </p>
                    <div class="pt-4">
                        <button
                            class="bg-primary hover:bg-[#4a5c30] text-white px-8 py-3 rounded-lg text-base font-bold tracking-wide transition-all shadow-lg hover:shadow-xl">
                            Inquire Rates
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12 px-6 lg:px-20 -mt-10 relative z-30">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-4">
                <div
                    class="bg-surface-light p-6 rounded-xl shadow-lg border-l-4 border-primary flex flex-col justify-between h-full">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined text-primary text-3xl">public</span>
                        <h3 class="text-lg font-bold text-slate-700">Export Destinations</h3>
                    </div>
                    <p class="text-4xl font-black text-slate-900">20+</p>
                    <p class="text-sm text-slate-500 mt-1">Countries across 4 continents</p>
                </div>
                <div
                    class="bg-surface-light p-6 rounded-xl shadow-lg border-l-4 border-accent flex flex-col justify-between h-full">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined text-accent text-3xl">inventory_2</span>
                        <h3 class="text-lg font-bold text-slate-700">Annual Volume</h3>
                    </div>
                    <p class="text-4xl font-black text-slate-900">500+</p>
                    <p class="text-sm text-slate-500 mt-1">TEUs shipped annually</p>
                </div>
                <div
                    class="bg-surface-light p-6 rounded-xl shadow-lg border-l-4 border-primary-light flex flex-col justify-between h-full">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined text-primary-light text-3xl">handshake</span>
                        <h3 class="text-lg font-bold text-slate-700">Partner Reliability</h3>
                    </div>
                    <p class="text-4xl font-black text-slate-900">99.8%</p>
                    <p class="text-sm text-slate-500 mt-1">On-time delivery rate</p>
                </div>
            </div>
        </section>
        <section class="py-16 px-6 lg:px-20 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    <div class="w-full md:w-1/2 flex flex-col gap-6">
                        <h2 class="text-3xl font-bold text-slate-900">Connecting Markets Worldwide
                        </h2>
                        <p class="text-slate-600 leading-relaxed">
                            Our strategic location in Indonesia allows us to serve major global markets efficiently.
                            We have established shipping routes to key ports across Asia, Australia, the Middle
                            East, and Europe.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">Southeast Asia (Fast
                                    Lane)</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">Middle East &amp; GCC
                                    Region</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">Australia &amp;
                                    Oceania</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-slate-700 font-medium">Western Europe</span>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 relative">
                        <div
                            class="aspect-video w-full rounded-2xl overflow-hidden shadow-2xl bg-slate-100 relative">
                            <img alt="World map emphasizing global trade routes and connectivity"
                                class="w-full h-full object-cover opacity-90"
                                data-alt="World map showing connection nodes and flight paths glowing on dark background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1JrS4BdPK_CpodhhjW2CeUGjZz1HZFth42AbWOuiZ0ZOlknqstUIIzHeS704RF09BVBAkQ6OI0ZdwDBqySCOUvsQzWmCIqB7Fn8pN7tgeLzAd4YbrBX64hyS1EcDi0Kv20KEpsceubLb3-VjrEkYbZdG5kKw5BtOULzPwGbQwC-A8ftbaRTafr6sZfd7624P1xLRr-Cwv7qBzlok1GZ0QSLcX4veFLXZcZkaWnTJ0Rr6mRR1oZ1WsmXAlmw5BHwUXvitvxzG608QW" />
                            <div
                                class="absolute bottom-4 right-4 bg-surface-light p-3 rounded-lg shadow-lg flex items-center gap-2 text-xs font-bold">
                                <span class="block size-3 rounded-full bg-accent animate-pulse"></span>
                                Active Routes
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-6 lg:px-20 bg-background-light">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-slate-900 mb-4">Flexible Shipping Methods
                    </h2>
                    <p class="text-slate-600 max-w-2xl mx-auto">We offer versatile shipping
                        solutions tailored to your volume requirements, ensuring cost-effectiveness and product
                        safety.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="bg-surface-light p-8 rounded-xl border border-slate-200 hover:border-primary transition-colors group">
                        <div
                            class="size-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <span class="material-symbols-outlined text-3xl">directions_boat</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">Sea Freight (FCL)</h3>
                        <p class="text-slate-600 mb-4 text-sm leading-relaxed">
                            Full Container Load (20ft / 40ft / 40ft HC). Ideal for bulk orders, providing the most
                            economical rate per unit with direct sealing at our factory.
                        </p>
                        <ul class="text-sm text-slate-500 space-y-2">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary"></span>Max
                                volume utilization</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary"></span>Reduced
                                handling risk</li>
                        </ul>
                    </div>
                    <div
                        class="bg-surface-light p-8 rounded-xl border border-slate-200 hover:border-primary transition-colors group">
                        <div
                            class="size-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <span class="material-symbols-outlined text-3xl">view_module</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">Sea Freight (LCL)</h3>
                        <p class="text-slate-600 mb-4 text-sm leading-relaxed">
                            Less than Container Load. Perfect for smaller test orders or supplemental stock.
                            Palletized and shrink-wrapped for shared container safety.
                        </p>
                        <ul class="text-sm text-slate-500 space-y-2">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary"></span>Flexible quantities</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary"></span>Weekly
                                departure schedules
                            </li>
                        </ul>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-surface-light p-8 rounded-xl border border-slate-200 hover:border-primary transition-colors group">
                        <div
                            class="size-14 rounded-full bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                            <span class="material-symbols-outlined text-3xl">local_shipping</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">Land Transport</h3>
                        <p class="text-slate-600 mb-4 text-sm leading-relaxed">
                            Cross-border trucking solutions available for neighboring countries and domestic
                            distribution within the archipelago.
                        </p>
                        <ul class="text-sm text-slate-500 space-y-2">
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary"></span>Door-to-door service</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary"></span>Real-time GPS tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 px-6 lg:px-20 bg-white">
            <div class="max-w-5xl mx-auto">
                <div class="flex items-center gap-3 mb-8">
                    <span class="material-symbols-outlined text-accent text-4xl">schedule</span>
                    <h2 class="text-3xl font-bold text-slate-900">Estimated Lead Times</h2>
                </div>
                <div class="overflow-hidden rounded-xl border border-slate-200 shadow-sm">
                    <table class="w-full text-left text-sm text-slate-600">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="px-6 py-4 font-bold uppercase tracking-wider" scope="col">Region</th>
                                <th class="px-6 py-4 font-bold uppercase tracking-wider" scope="col">Major Ports
                                </th>
                                <th class="px-6 py-4 font-bold uppercase tracking-wider" scope="col">Transit Time
                                    (Days)</th>
                            </tr>
                        </thead>
                        <tbody
                            class="divide-y divide-slate-200 bg-surface-light">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">Southeast Asia</td>
                                <td class="px-6 py-4">Singapore, Port Klang, Manila</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">3
                                        - 7 Days</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">Australia</td>
                                <td class="px-6 py-4">Sydney, Melbourne, Fremantle</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">10
                                        - 18 Days</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">Middle East</td>
                                <td class="px-6 py-4">Jebel Ali, Jeddah, Dammam</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">18
                                        - 25 Days</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900">Europe</td>
                                <td class="px-6 py-4">Rotterdam, Hamburg, Felixstowe</td>
                                <td class="px-6 py-4"><span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">28
                                        - 35 Days</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="mt-4 text-xs text-slate-500 italic">* Transit times are estimates port-to-port and subject
                    to vessel schedules and customs clearance.</p>
            </div>
        </section>

        <section class="py-16 px-6 lg:px-20 bg-background-light">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-3">Packaging Standards</h2>
                        <p class="text-slate-600 max-w-xl">We prioritize the integrity of your
                            product. Our multi-layer packaging system ensures zero damage during long-haul transit.
                        </p>
                    </div>
                    <a class="text-primary font-bold hover:underline flex items-center gap-1" href="#">
                        Download Packing Specs <span class="material-symbols-outlined text-sm">download</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="group relative overflow-hidden rounded-xl h-64 md:h-80 shadow-md">
                        <img alt="Stack of cardboard boxes on a wooden pallet wrapped in plastic"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Warehouse pallets wrapped in industrial shrink wrap ready for loading"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqEqiv37l_o1qPfuGlbkMYDjCuGCRWHbUrZ7WXUn0TIXeeSiJxcC9ud-UvPLJLzEdU69430sMaFvGagtMOQBLTLmPQZ9h8awafix-_2mDbtYR0h2E6VnZbJvYToZ00utBdFn85e1kOuNXA4JvZcrl-ZxpQGOMTaz7fw1cZNg9eOKJt3nsqLUBYSuaL9n_PeEptz0O-pcwiNN5tb8yo3ItxQ3o3p8XWv4NFsskK5ooBJOnkra-XIuMd63wiyA8jhOfpP2NxOb5HIVqv" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="text-white font-bold text-xl mb-1">Palletized &amp; Shrink Wrapped</h3>
                            <p class="text-white/80 text-sm">Industrial-grade wrapping for moisture protection.</p>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-xl h-64 md:h-80 shadow-md">
                        <img alt="Interior of a shipping container loaded with boxes"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            data-alt="Inside view of a shipping container efficiently loaded with cargo boxes"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCoCMfbgz0u3B_Cgy7Kz_EeDTVXBS8vvpn2FFCnG38fJ4oDlVQdBbdZg2zudOKfZB2euaBdVw8edOrpQPLhxMlXOYdutCUy3NkYjjIWWvlZ6qvlzDtSmHyJub4PpUXRM9vYWQBoDpX5phojJL0dFBh333NuzRLZQ-sbaGDZkINL2HONGWGKv6MYwd0HXgW5hIr_kvUhg27dFkKk8nXx2FTdKR_zEZvW4oF3fHySlR_p3xi76N9ivsK5xp2X_aULQhQieotdVpdl3flM" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <h3 class="text-white font-bold text-xl mb-1">Optimized Container Loading</h3>
                            <p class="text-white/80 text-sm">Computer-aided loading plans to maximize space.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 px-6 lg:px-20 bg-primary-light/20">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6">Ready to Ship?</h2>
                <p class="text-lg text-slate-600 mb-8 max-w-2xl mx-auto">
                    Contact our export team for a detailed quote including freight estimates to your destination
                    port. We respond within 24 hours.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        class="bg-primary hover:bg-[#4a5c30] text-white px-8 py-4 rounded-lg text-lg font-bold tracking-wide transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">request_quote</span>
                        Inquire Export Rates
                    </button>
                    <button
                        class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-900 px-8 py-4 rounded-lg text-lg font-bold tracking-wide transition-all shadow-sm flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">call</span>
                        Contact Sales
                    </button>
                </div>
            </div>
        </section>
    </div>
@endsection