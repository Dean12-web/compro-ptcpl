@extends('front.layouts.app')
@section('title', __('seo.gallery.title'))
@section('meta_description', __('seo.gallery.description'))
@section('meta_keywords',__('seo.gallery.keywords'))
@section('og_title', __('seo.gallery.title'))
@section('og_description', __('seo.gallery.description'))

@section('content')
<div class="flex-1">
    <section class="relative w-full aspect-[21/9] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent z-10"></div>
        <div class="absolute inset-0 bg-center bg-cover" data-alt="Wide shot of a modern industrial factory interior"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCulQGpPIQhhJEK9ldJ0COsvo0BUSimkce9Rr0V89H2tSl4BtrsFrdRg0634p5YprsxBIdNR_Ic6eIM2KAMU-lsR0d7X3Liunnio_RY-kNRjfke7e_9ADGX2mEQdc9UuArxU3ydiG9SPawOR36jY5ocpWVOy44ZIfnX4q_S6Ygvqsv9pakTqd0YUnUhgvnugygqbMOlWdVwzUKUOc-CaemPP9YxrCntO46U5J3u3aZmcwNr6Aa1mAQF5geSU4h-IzkE7ZYc8EG4L7zn");'>
        </div>
        <div class="relative z-20 text-center px-6 max-w-4xl">
            <span class="text-accent font-bold uppercase tracking-widest text-sm mb-4 block">{{ __('general.gallery_hero_banner') }}</span>
            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight mb-6">{{ __('general.gallery_hero_title') }}</h1>
            <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Discover the intersection of high-tech automation and sustainable manufacturing at
                Indonesia's premier industrial egg tray facility.
            </p>
        </div>
    </section>
    <div class="max-w-7xl mx-auto px-6 py-16 space-y-24">
        <section>
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                <div>
                    <h2 class="text-primary text-3xl font-black uppercase tracking-tight mb-2">01. {{ __('general.gallery_factory_title') }}</h2>
                    <p class="text-slate-500 max-w-lg">Advanced machinery and expansive
                        industrial spaces designed for maximum output efficiency.</p>
                </div>
                <div class="h-1 flex-grow mx-8 bg-primary/10 mb-4 hidden md:block"></div>
                <span class="material-symbols-outlined text-4xl text-primary/20">precision_manufacturing</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 group relative overflow-hidden rounded-xl">
                    <div class="aspect-video bg-center bg-cover transition-transform duration-700 group-hover:scale-110"
                        data-alt="High-capacity pulp mixing tanks in a clean factory"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCYStZsNuOdNbDDpnrWyAmMjXRXNCKaY0w6a99fckSKO7eIo442EpD4bg-cJY66rJd3IxHlqNNkOhcBpNP3x1j8SOVzpLhPsajgLM7yYklIJ2NsyKeLd2lxO-W2sm-GhcIqAeuozPTepohonTx7njsf84koSmJIZcbJ7Z74B_GO-Tyew1NWqSvGVv4Jczr8i4ZZ47bQGcRhKOa1MAqZjTXdp-dzvUFISJU1vQK0DCIvSPZJBJ2ZXxM9C6e5rTEcMV054l7zQh273hj-");'>
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-lg">Central Pulping Hub</h4>
                        <p class="text-white/80 text-sm">State-of-the-art hydro-pulping system processing
                            recycled fiber.</p>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="group relative overflow-hidden rounded-xl h-full">
                        <div class="h-full min-h-[200px] bg-center bg-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="Modern CNC machinery used for mold creation"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLCdUVZdw1Kk53wbhiblO6DQT7XI6PbSgOjDeVUsgaA3AnoVQpaPTPvOfzzwuIbhQX-7Zg7h21xVhOwcCwi7hp79y4ownj1X_kpSjfJeBewP5UEqLxeMl2AsfE_HzIMfVLCIt6v13F6NV6pOU1kg9YF-NRVFkHB9s0SKeSCk1FpHzi8lgZkqAH8pVWPWb_vxi_zsaRsIpbAdRZ-gVqCZrZYcH5mtOBkmXIdvEeiDp88gCtjWkQOCLC7FiS-JneFoNDDhFE0750UwJK");'>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                            <h4 class="text-white font-bold text-lg">Mold Workshop</h4>
                            <p class="text-white/80 text-sm">Precision CNC machinery for custom tray
                                designs.</p>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-xl h-full">
                        <div class="h-full min-h-[200px] bg-center bg-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="Spacious factory floor with clean pathways"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLcIDEGlHZWKS1OUPGIlF-bb49aE8wE31PQSVkTQdLCZxlx0pxjoctU8hcmHlkf5SqqwpM0bhgWa0Sy_1tMCUb9Zi9EWWQIujkHyGwJt3TkGFCMvvyHZoL63S6uJPeH7GKSutAuRytLDMPqNRtC_Uyn2WiJk6fFc7d38HF0dEqf2PYUQXAFMkyirAlW6yQtKOckprCfWkbShNwEbOfF_-UHQ8ivPZZFHjcCpQ3wbFetOI6YCFrx8rhraDR-0--2ey7HauglkU6L2Xg");'>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                            <h4 class="text-white font-bold text-lg">Expansion Area</h4>
                            <p class="text-white/80 text-sm">Large industrial footprint optimized for
                                logistic flow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary/5 -mx-6 px-6 py-16 rounded-3xl">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                <div>
                    <h2 class="text-primary text-3xl font-black uppercase tracking-tight mb-2">02.
                        {{ __('general.gallery_production_title') }}</h2>
                    <p class="text-slate-500 max-w-lg">A seamless transition from liquid
                        pulp to rigid, durable protection for global poultry markets.</p>
                </div>
                <div class="h-1 flex-grow mx-8 bg-primary/20 mb-4 hidden md:block"></div>
                <span class="material-symbols-outlined text-4xl text-primary/20">repeat</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="space-y-4">
                    <div class="relative rounded-xl overflow-hidden aspect-square shadow-lg">
                        <div class="w-full h-full bg-center bg-cover" data-alt="Vat of grey pulp being mixed"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCltPigJqC2d15d8EzddW2pQ3DuUHrWpg4acn0vq2oVUV5tmMSY04bN8bpugLWRQOTL7-6-x5GX6tmIwfliFBXnPkGizMPo_NFPfDF8vlraYjCMmW19kXnv1RoBHTWoOP0rqMKyHyNt5VWc9MUCYRhwF0E7EGycAqzJAkxWKE5rrrI77ezvR9XbRQQ9MICFoSNTCDX6n4T2Nk9KUv98yVobh4QP2xVj1icOZ0-uMkBjBPjkuJspbmQ27R4tmVlZp4xJ0siu6eDp2ZH0");'>
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">
                            1</div>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-800">Fiber Preparation</h5>
                        <p class="text-sm text-slate-500">Recycled paper is broken down into refined fiber
                            pulp.</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="relative rounded-xl overflow-hidden aspect-square shadow-lg">
                        <div class="w-full h-full bg-center bg-cover" data-alt="Mechanical mold pressing into pulp"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCXe8xqtoO00FgrpTapg9fGDLn4xR8PIn8MuembFHoS_8HMphMowDji7oKjKKkfSeCKGUF65H3QYL6_LyIy9rTHKs-rmKnBMOSU9jBGRzj3flMSvmcqmZ8_ylHfv1f9F7D76VorlnH_cSG_w5IY7QJEtjBStbxKBdEcAMizjmogXlsmktN6HvjgUyDmmkmjB0yXl9wzghnLGryeVpPpkPPbImQ_GP8mrSsrIgCrgsQXLhoKW4fG-oXGLXOEjNjExLWw3hu962BemGou");'>
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">
                            2</div>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-800">Vacuum Molding</h5>
                        <p class="text-sm text-slate-500">Precision molds shape the pulp using high-pressure
                            vacuum.</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="relative rounded-xl overflow-hidden aspect-square shadow-lg">
                        <div class="w-full h-full bg-center bg-cover"
                            data-alt="Conveyor belt moving trays through a large oven"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBHQM2hklHz3WLbL5EeE76yR-g9vanRmwdYsaFYG_NIGFaL7e5Et0QLbg25VZI0h7o0RYp_PJocX3K1xsmoi5MvL2vOT7K_kFgbovLz9_RvVOufu9jnAA51wI3d_kiPKm9BmFebnrJuoLvy5jZulf2P7O98OHtX5b9H_LE2PtV-P1I7KAo_xhoLqOH6bLgNnsXX4gNf7eS1-UzKERg_kjjJTyNjpydw39z0VntmTvwf0JR4Z3AgCW4wOEyEmpoKB09ExnGmxW8bw1Cy");'>
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">
                            3</div>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-800">High-Temp Drying</h5>
                        <p class="text-sm text-slate-500">Trays pass through a multi-layer drying tunnel at
                            200°C.</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="relative rounded-xl overflow-hidden aspect-square shadow-lg">
                        <div class="w-full h-full bg-center bg-cover" data-alt="Quality inspector checking a tray"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCu-95jOZRLhIiJ1g66bhkQqu7VEM5_nT6lV1pP9XnJ5sd_zedCs6L6aZvgd21mAQlN036T5KZeEiiBxdwr18SphB7VwTM_2YTt85nHeu8DEPYsnXBlFIg9jU-t-4UJ1OJ3daLbzvu9GUo5rIc6nJmcZxfu7bAQbeFBvTqc6Avb5tQsn2w0enfDFTri37UINvEoxpyaWXo9fJlN4v09w7lIQWICJccRlW-rw-eveaMBwsrATKneAB5BgBCbJ0L-JxE2LhVImlk7RlxX");'>
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">
                            4</div>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-800">Quality Inspection</h5>
                        <p class="text-sm text-slate-500">Rigid testing for weight, moisture, and structural
                            integrity.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                <div>
                    <h2 class="text-primary text-3xl font-black uppercase tracking-tight mb-2">03. {{ __('general.gallery_packaging_title') }}</h2>
                    <p class="text-slate-500 max-w-lg">Ready for the world. Efficient
                        palletizing and secure container loading for international export.</p>
                </div>
                <div class="h-1 flex-grow mx-8 bg-primary/10 mb-4 hidden md:block"></div>
                <span class="material-symbols-outlined text-4xl text-primary/20">local_shipping</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-4 rounded-2xl shadow-sm border border-primary/5 group">
                    <div class="relative rounded-xl overflow-hidden mb-4">
                        <div class="aspect-[4/3] bg-center bg-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Stacked egg trays on a wooden pallet"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDWzu-3FeusFTNON1y4-b8FEMYvCOBIW-BkinQFxXaf2ef5z39YGT_N0NDsuRidCGBvzr1p5_OzTjC-Yl4oQmIGJmh_JBSbrxVbnVZqXaOebLQFy36i-O2xn8OYphCsrIYPz1jqGaxa1dk0GSAAXdYn6F2ueYQEbCnMdUbRbuh_s0yWyVKWmdz7P832iPD9wRT8QpWkKoFkt3reYQlWCL8544SMGummROZDiFaONsYp5B1ROTlYlolnX4td2dv5pu78P9x3NIo2ERaP");'>
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-white/90 px-3 py-1 rounded-full text-xs font-bold text-primary">
                            Palletized Units</div>
                    </div>
                    <p class="text-slate-700">
                        Standardized pallet configurations ensure stability during transit and easy handling
                        for our customers.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-2xl shadow-sm border border-primary/5 group">
                    <div class="relative rounded-xl overflow-hidden mb-4">
                        <div class="aspect-[4/3] bg-center bg-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Forklift loading a shipping container"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAz7Cgtf4u29f4waW4H1sOjtfFp-AXNnBsw3nKwnwsII3w25ZsvSk7KpdzsacAG6wR2hfgK9mwvHvDu7iZ9RFkazQyYksxxfgv1LOTUHuQapc7LZsYg1zUKi4p1MrOhCldRuIYyllvN4tqTirskjn5DfuluObTiaTKF5XKwsgQmZyspB7tIbsQSoBEWxM-u76XTSNt1rhjPYVcP4O0ryYb2VnRiDzDpU4NVy3tXBJyD0iDKZG4ZBV0X7nbEUAduCs4Mp2E9Dne7pdnR");'>
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-white/90 px-3 py-1 rounded-full text-xs font-bold text-primary">
                            Global Export</div>
                    </div>
                    <p class="text-slate-700">
                        Optimized container loading maximize space efficiency for international sea freight
                        and regional trucking.
                    </p>
                </div>
            </div>
        </section>
         <section class="bg-primary/5 -mx-6 px-6 py-16 rounded-3xl">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                <div>
                    <h2 class="text-primary text-3xl font-black uppercase tracking-tight mb-2">04.
                        {{ __('general.gallery_quality_title') }}</h2>
                    <p class="text-slate-500 max-w-lg">A seamless transition from liquid
                        pulp to rigid, durable protection for global poultry markets.</p>
                </div>
                <div class="h-1 flex-grow mx-8 bg-primary/20 mb-4 hidden md:block"></div>
                <span class="material-symbols-outlined text-4xl text-primary/20">repeat</span>
            </div>
             <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-4 rounded-2xl shadow-sm border border-primary/5 group">
                    <div class="relative rounded-xl overflow-hidden mb-4">
                        <div class="aspect-[4/3] bg-center bg-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Stacked egg trays on a wooden pallet"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDWzu-3FeusFTNON1y4-b8FEMYvCOBIW-BkinQFxXaf2ef5z39YGT_N0NDsuRidCGBvzr1p5_OzTjC-Yl4oQmIGJmh_JBSbrxVbnVZqXaOebLQFy36i-O2xn8OYphCsrIYPz1jqGaxa1dk0GSAAXdYn6F2ueYQEbCnMdUbRbuh_s0yWyVKWmdz7P832iPD9wRT8QpWkKoFkt3reYQlWCL8544SMGummROZDiFaONsYp5B1ROTlYlolnX4td2dv5pu78P9x3NIo2ERaP");'>
                        </div>
                    </div>
                    <p class="text-slate-700">
                        Standardized pallet configurations ensure stability during transit and easy handling
                        for our customers.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-2xl shadow-sm border border-primary/5 group">
                    <div class="relative rounded-xl overflow-hidden mb-4">
                        <div class="aspect-[4/3] bg-center bg-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Forklift loading a shipping container"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAz7Cgtf4u29f4waW4H1sOjtfFp-AXNnBsw3nKwnwsII3w25ZsvSk7KpdzsacAG6wR2hfgK9mwvHvDu7iZ9RFkazQyYksxxfgv1LOTUHuQapc7LZsYg1zUKi4p1MrOhCldRuIYyllvN4tqTirskjn5DfuluObTiaTKF5XKwsgQmZyspB7tIbsQSoBEWxM-u76XTSNt1rhjPYVcP4O0ryYb2VnRiDzDpU4NVy3tXBJyD0iDKZG4ZBV0X7nbEUAduCs4Mp2E9Dne7pdnR");'>
                        </div>
                    </div>
                    <p class="text-slate-700">
                        Optimized container loading maximize space efficiency for international sea freight
                        and regional trucking.
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection