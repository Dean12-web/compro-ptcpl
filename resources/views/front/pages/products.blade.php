@extends('front.layouts.app')
@section('title', __('seo.products.title'))
@section('meta_description', __('seo.products.description'))
@section('meta_keywords',__('seo.products.keywords'))
@section('og_title', __('seo.products.title'))
@section('og_description', __('seo.products.description'))

@section('content')
    <div class="flex-1 lg:px-40 py-8 px-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-10">
            <div class="flex flex-col gap-2">
                <span class="text-primary font-bold tracking-widest text-xs uppercase">{{ __('general.product_hero_title') }}</span>
                <h1 class="text-slate-900 text-5xl font-black leading-tight tracking-tight">{{ __('general.product_hero_subtitle') }}</h1>
                <p class="text-slate-500 text-lg max-w-2xl">{{ __('general.product_hero_content') }}</p>
            </div>
        </div>
        <div
            class="flex flex-wrap items-center justify-between gap-4 pb-8 border-b border-slate-200 mb-8">
            <div class="flex flex-wrap gap-3">
                <div class="relative group">
                    <button
                        class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-white border border-slate-200 px-4 hover:border-primary transition-all">
                        <span class="text-slate-700 text-sm font-semibold">Material</span>
                        <span
                            class="material-symbols-outlined text-slate-400 text-lg group-hover:text-primary">expand_more</span>
                    </button>
                </div>
                <div class="relative group">
                    <button
                        class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-white border border-slate-200 px-4 hover:border-primary transition-all">
                        <span class="text-slate-700 text-sm font-semibold">Capacity</span>
                        <span
                            class="material-symbols-outlined text-slate-400 text-lg group-hover:text-primary">expand_more</span>
                    </button>
                </div>
                <div class="flex items-center gap-2 ml-2">
                    <span class="text-slate-400 text-sm font-medium">Active Filters:</span>
                    <span
                        class="bg-primary/10 text-primary text-xs font-bold px-3 py-1.5 rounded-full flex items-center gap-2">
                        All Materials
                        <span class="material-symbols-outlined text-sm cursor-pointer">close</span>
                    </span>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-slate-400 text-sm font-medium">Sort by:</span>
                <button
                    class="flex h-10 items-center justify-center gap-x-2 rounded-lg bg-white border border-slate-200 px-4">
                    <span class="text-slate-700 text-sm font-semibold">Newest First</span>
                    <span class="material-symbols-outlined text-slate-400 text-lg">sort</span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Product 1 -->
            <div
                class="group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="relative aspect-square overflow-hidden bg-slate-100">
                    <div class="w-full h-full bg-center bg-cover transform group-hover:scale-110 transition-transform duration-500"
                        data-alt="Industrial standard gray pulp egg tray for 30 eggs"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDVXO6b3iPc5v87v_QNwEUn0K3XYIbUuUtkvF2Ru4tAjOKcHr4kqbqhIHEquM62wzdeA0QB9xD0X6su0GBPubNNXAeN0XWVlbN9uY_HXDyUSwuCZU49GwnVA7zBgJxxhV8iLPGapfnY3VPYGJR4icTCIZ_pKw_IYu3EsFuZdKzGDNcvl7nIJwNe2FbaKxd8dKPhadJxGHF5wqDHdQ0qQ_rALjUpZwCC4erN46op7f4ekjfOH2TCTYvZgT_7hD7kg0LKOfjkrVg1NXP9");'>
                    </div>
                    <div
                        class="absolute top-3 left-3 bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-2 py-1 rounded">
                        Best Seller</div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="mb-4">
                        <h3 class="text-slate-900 text-lg font-bold mb-1">Standard Chicken Tray
                        </h3>
                        <div class="flex items-center gap-2 text-slate-500 text-xs font-medium">
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">inventory_2</span> Pulp</span>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">grid_view</span> 30 Eggs</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-2">
                        Reinforced recycled pulp structure for heavy stacking and safe industrial transport.</p>
                    <div class="mt-auto">
                        <button
                            class="w-full bg-slate-100 text-slate-900 font-bold text-sm py-3 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors flex items-center justify-center gap-2">
                            View Details
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div
                class="group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="relative aspect-square overflow-hidden bg-slate-100">
                    <div class="w-full h-full bg-center bg-cover transform group-hover:scale-110 transition-transform duration-500"
                        data-alt="Premium smooth finish egg carton for retail display"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9HEWljMKIwUpQANH8sSxd3QHSjsfR9njjC8HGe_vr-sY0Sx1Z1Cl_gMQSNJizLmW0t7zc_8mBThpi7Qu2-gXBM0_VY-u75-VMeNxJ5QJs2mqsyRlhtuaMXBj6e7BvEi65Cac5JDgtNtyQa4pS8j_UBKpsjkPr3Jb1UFZkbvJ9hOVlGvhHLlzpXuNfk4o2xUIq9hkRofBokCX-IjUvLBzMpzR3qfcjZG2p070iPl4qyTgkGaxr9ooC4OYaKP38fmcQ9P3Du5gUWxBg");'>
                    </div>
                    <div
                        class="absolute top-3 left-3 bg-slate-900 text-white text-[10px] font-bold uppercase tracking-widest px-2 py-1 rounded">
                        Premium</div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="mb-4">
                        <h3 class="text-slate-900 text-lg font-bold mb-1">Premium Pulp Carton
                        </h3>
                        <div class="flex items-center gap-2 text-slate-500 text-xs font-medium">
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">inventory_2</span> Premium
                                Pulp</span>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">grid_view</span> 12 Eggs</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-2">
                        High-end smooth finish pulp designed for retail shelves and branding visibility.</p>
                    <div class="mt-auto">
                        <button
                            class="w-full bg-slate-100 text-slate-900 font-bold text-sm py-3 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors flex items-center justify-center gap-2">
                            View Details
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div
                class="group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="relative aspect-square overflow-hidden bg-slate-100">
                    <div class="w-full h-full bg-center bg-cover transform group-hover:scale-110 transition-transform duration-500"
                        data-alt="Clear plastic quail egg tray for 20 eggs"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABE1QqXCBqJ7O4hR-IEf1dyzbd3hrc27gVGDSC8FiVx1TDw7WMOjRyBSozWrrI9OSxpYk7qYR3FQx8oxtn-C-6cCAfSkC6JlSC2XWq17JJKWLkMs65j99PG5GwEqnuPVjueFGMrtz_LC1XxcjMdEEJCIAzcfu3Rg84CnF0Ez91DF1TcMFbD9BiEFErfVyZNyABhwjZ9ic5q8AVdf6nBfrX1k8_Hnv_ww1nfTmHjg_j4mxC7Y3O1PGzTEUKCxbZ5Dv_S8onTXLH2ONS");'>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="mb-4">
                        <h3 class="text-slate-900 text-lg font-bold mb-1">Quail Egg Tray</h3>
                        <div class="flex items-center gap-2 text-slate-500 text-xs font-medium">
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">inventory_2</span> PET
                                Plastic</span>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">grid_view</span> 20 Eggs</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-2">
                        Ultra-clear protective trays optimized for delicate quail egg transportation.</p>
                    <div class="mt-auto">
                        <button
                            class="w-full bg-slate-100 text-slate-900 font-bold text-sm py-3 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors flex items-center justify-center gap-2">
                            View Details
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div
                class="group flex flex-col bg-white rounded-xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="relative aspect-square overflow-hidden bg-slate-100">
                    <div class="w-full h-full bg-center bg-cover transform group-hover:scale-110 transition-transform duration-500"
                        data-alt="Heavy duty duck egg pulp tray"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAEnAzqyty82z4CHuuHuhwtARHQwevFKkDTgvgsAomz6RrsWllOWww2HgfAsw_qEJhpv6SbjEn6uhbNkO8EYgxwNUF63jiLGnrf6qJ_8zeQOXE9qi4DEkN0dmk2-Y6frXieqQlQe7mMUdVSc1a8oV8o8XziJkc_ZTjFOUsOu2Frs8_ArNjWuUsdZEhzmcuLv_AvX1V9TtON-E4ZT8lCOn55qX8qoVgrzjdLEy9UPJxAZbnrj9CiVjAAtzcmMAnZa2IWiEWqc984VBeZ");'>
                    </div>
                    <div
                        class="absolute top-3 left-3 bg-orange-600 text-white text-[10px] font-bold uppercase tracking-widest px-2 py-1 rounded">
                        Reinforced</div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="mb-4">
                        <h3 class="text-slate-900 text-lg font-bold mb-1">Duck Egg Tray</h3>
                        <div class="flex items-center gap-2 text-slate-500 text-xs font-medium">
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">inventory_2</span> Heavy
                                Pulp</span>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="flex items-center gap-1"><span
                                    class="material-symbols-outlined text-sm">grid_view</span> 20 Eggs</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-2">
                        Large-cell design with enhanced structural integrity for heavier avian eggs.</p>
                    <div class="mt-auto">
                        <button
                            class="w-full bg-slate-100 text-slate-900 font-bold text-sm py-3 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors flex items-center justify-center gap-2">
                            View Details
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 flex items-center justify-center gap-4">
            <button
                class="flex items-center justify-center w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <div class="flex gap-2">
                <button class="w-10 h-10 rounded-xl bg-primary text-white font-bold">1</button>
                <button
                    class="w-10 h-10 rounded-xl border border-slate-200 text-slate-600 font-bold hover:bg-slate-50">2</button>
                <button
                    class="w-10 h-10 rounded-xl border border-slate-200 text-slate-600 font-bold hover:bg-slate-50">3</button>
            </div>
            <button
                class="flex items-center justify-center w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </div>
@endsection