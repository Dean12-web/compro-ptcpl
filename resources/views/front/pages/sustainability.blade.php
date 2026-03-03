@extends('front.layouts.app')
@section('title', __('seo.sustainability.title'))
@section('meta_description', __('seo.sustainability.description'))
@section('meta_keywords',__('seo.sustainability.keywords'))
@section('og_title', __('seo.sustainability.title'))
@section('og_description', __('seo.sustainability.description'))

@section('content')
<div class="flex-1">
    <section class="px-4 md:px-20 py-8">
        <div
            class="relative min-h-[520px] flex flex-col items-start justify-end p-8 md:p-16 rounded-xl overflow-hidden bg-slate-900">
            <div class="absolute inset-0 opacity-60">
                <img alt="Lush green forest aerial view" class="w-full h-full object-cover"
                    data-alt="Lush green forest canopy from aerial perspective"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFORWWS8KE2pmhR1nB9V081cXr_blTtvUDELB_SM591NUm-38Ab3lM3ezAj6BhIzVwNe2qvgYZ6isBSyDJn8mEd-MRsweuToqtguBKu-Q8oakuv561dbLQVotsj7wi4nNJGrTepjpDsSeiXoBaBP5FicNLS2HdplFwSYXd16JxSKWv3nU8oYgCAs8m0rws72LgcLrNvsYCgjrPFtpXIO3EhVRQEZccdy4FdpycN4lZXtSLfhTWWMfBZUiSGfiuccUKae4moTyckRIl" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="relative z-10 max-w-2xl space-y-6">
                <h1 class="text-white text-5xl md:text-7xl font-black leading-[1.1] tracking-tight">
                    Our Commitment to <span class="text-secondary">Sustainability</span>
                </h1>
                <p class="text-slate-200 text-lg md:text-xl font-medium leading-relaxed max-w-xl">
                    Revolutionizing egg packaging with 100% biodegradable and recycled solutions. We don't
                    just protect eggs; we protect the planet.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button
                        class="flex min-w-[160px] cursor-pointer items-center justify-center rounded-lg h-14 px-6 bg-primary text-white text-base font-bold shadow-lg hover:translate-y-[-2px] transition-all">
                        Explore Our Impact
                    </button>
                    <button
                        class="flex min-w-[160px] cursor-pointer items-center justify-center rounded-lg h-14 px-6 bg-white/10 backdrop-blur-md border border-white/20 text-white text-base font-bold hover:bg-white/20 transition-all">
                        Read Report
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 md:px-20 py-20 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest">
                    <span class="material-symbols-outlined text-sm">eco</span>
                    Conscious Sourcing
                </div>
                <h2 class="text-slate-900 text-4xl md:text-5xl font-black leading-tight">
                    High-Quality 100% Recycled Paper Pulp
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed">
                    At PT CPL, we believe in circularity. Every tray we produce starts as post-consumer
                    waste—discarded newspapers, cardboard, and office paper. Our advanced pulping technology
                    transforms this "waste" into premium protective packaging.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span
                            class="flex-shrink-0 size-6 rounded-full bg-secondary flex items-center justify-center text-white">
                            <span class="material-symbols-outlined text-sm">check</span>
                        </span>
                        <span class="text-slate-700 font-medium italic">Zero virgin wood
                            fibers used in production.</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span
                            class="flex-shrink-0 size-6 rounded-full bg-secondary flex items-center justify-center text-white">
                            <span class="material-symbols-outlined text-sm">check</span>
                        </span>
                        <span class="text-slate-700 font-medium italic">Fully
                            compostable within 90 days.</span>
                    </li>
                </ul>
            </div>
            <div class="relative group">
                <div
                    class="absolute -inset-4 bg-primary/5 rounded-2xl rotate-2 group-hover:rotate-0 transition-transform">
                </div>
                <img alt="Close up of recycled paper pulp texture"
                    class="relative rounded-xl shadow-2xl w-full h-[500px] object-cover"
                    data-alt="Macro photography of raw recycled paper pulp texture"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWBsvjctdPWNdm01WtUJOhp-8JjiwwyzS5kiA3QhqYGBanal8DCIr-PBvk3SrUDjrGk8AgwWoXeYxlyMm2Nr8_TZHPvIZ8-BpvCrW5ZxUgct-p6ZNHbPG2WL9EHqsuAcw4W_cgm2xHdp-GkMXDDuX1jxSPjI_pbfMMZKuczSHNmOzgsM2wKH-DaHxOeD8RDyIsS0Bbx800WRLlUdNx9raC62YgG6iX9Zgd2OkjNXnt_z16Jd2R-rQ4BX13gJ8bXdANI9o4934jFFJV" />
            </div>
        </div>
    </section>
    <section class="px-4 md:px-20 py-24 bg-background-light">
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <h2 class="text-slate-900 text-4xl font-black">Our Circular Production Loop</h2>
            <div class="h-1.5 w-24 bg-primary mx-auto rounded-full"></div>
            <p class="text-slate-600 text-lg">Watch how we transform discarded paper
                into industrial-grade egg protection through our efficient, low-impact manufacturing
                process.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 relative">
            <div
                class="hidden md:block absolute top-1/4 left-0 right-0 h-0.5 border-t-2 border-dashed border-primary/20 -z-0">
            </div>
            <div
                class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                <div
                    class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-3xl">recycling</span>
                </div>
                <span class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">Step
                    01</span>
                <h3 class="text-slate-900 text-xl font-bold mb-3">Collection</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Strategic gathering of post-consumer paper
                    and cardboard from local communities and industries.</p>
            </div>
            <div
                class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                <div
                    class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-3xl">water_drop</span>
                </div>
                <span class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">Step
                    02</span>
                <h3 class="text-slate-900 text-xl font-bold mb-3">Pulping</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Breaking down fibers in a heavy-duty
                    hydraulic pulper with specialized water filtration systems.</p>
            </div>
            <div
                class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                <div
                    class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-3xl">precision_manufacturing</span>
                </div>
                <span class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">Step
                    03</span>
                <h3 class="text-slate-900 text-xl font-bold mb-3">Forming</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Precision-molded vacuum technology shapes
                    the pulp into durable, shock-absorbent tray structures.</p>
            </div>
            <div
                class="relative z-10 bg-white p-8 rounded-xl border border-primary/10 shadow-sm hover:shadow-xl transition-all hover:translate-y-[-8px]">
                <div
                    class="size-16 rounded-2xl bg-primary text-white flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-3xl">wb_sunny</span>
                </div>
                <span class="text-primary font-bold text-xs uppercase tracking-tighter mb-2 block">Step
                    04</span>
                <h3 class="text-slate-900 text-xl font-bold mb-3">Drying</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Energy-efficient heat tunnels remove
                    moisture, ensuring maximum structural integrity and lifespan.</p>
            </div>
        </div>
    </section>
    <section class="px-4 md:px-20 py-24 bg-primary text-white overflow-hidden relative">
        <div class="absolute right-0 top-0 w-1/3 h-full opacity-10 pointer-events-none">
            <svg class="w-full h-full" viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M44.7,-76.4C58.3,-69.2,70.1,-59,78.5,-46.1C86.9,-33.2,91.9,-17.6,90.9,-2.4C89.9,12.8,82.9,27.5,73.5,40.3C64.1,53,52.4,63.7,39,70.8C25.6,77.9,10.6,81.4,-3.8,87.9C-18.2,94.4,-31.9,103.9,-44.6,101.9C-57.3,99.9,-68.9,86.3,-77.3,71.7C-85.7,57.1,-90.8,41.4,-92.4,25.8C-94,10.2,-92,20.2,-87.3,-2.7C-82.6,-25.6,-75.2,-51.4,-61,-59.6C-46.8,-67.8,-25.8,-58.4,-7.8,-44.9C10.2,-31.4,20.4,-25.9,31.1,-15.8C41.8,-5.7,53,8.9,56.7,25.5"
                    fill="#FFFFFF" transform="translate(100 100)"></path>
            </svg>
        </div>
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
            <div class="lg:col-span-1">
                <h2 class="text-4xl md:text-5xl font-black mb-6">Our 2030 Earth Goals</h2>
                <p class="text-primary-100/80 text-lg mb-8 italic">Pioneering standard-setting practices for
                    the South East Asian packaging industry.</p>
                <div class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10">
                    <div class="text-4xl font-bold mb-1">94%</div>
                    <div class="text-sm font-bold uppercase tracking-widest text-secondary">Water Recycled
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <span class="material-symbols-outlined text-4xl text-secondary">waves</span>
                    <h3 class="text-xl font-bold">Closed-Loop Water System</h3>
                    <p class="text-slate-200/80 leading-relaxed">Our pulping facilities use advanced
                        purification systems that recycle nearly all water used in the production process,
                        drastically reducing our intake from local sources.</p>
                </div>
                <div class="space-y-4">
                    <span class="material-symbols-outlined text-4xl text-secondary">cloud_off</span>
                    <h3 class="text-xl font-bold">Carbon Footprint Reduction</h3>
                    <p class="text-slate-200/80 leading-relaxed">By sourcing paper locally and optimizing
                        logistics, we have reduced our transportation emissions by 30% over the last three
                        years.</p>
                </div>
                <div class="space-y-4">
                    <span class="material-symbols-outlined text-4xl text-secondary">delete_sweep</span>
                    <h3 class="text-xl font-bold">Zero-Waste Target</h3>
                    <p class="text-slate-200/80 leading-relaxed">Every scrap of production offcut is
                        returned to the pulper. We aim for 100% waste-free manufacturing by the end of 2025.
                    </p>
                </div>
                <div class="space-y-4">
                    <span class="material-symbols-outlined text-4xl text-secondary">solar_power</span>
                    <h3 class="text-xl font-bold">Renewable Energy</h3>
                    <p class="text-slate-200/80 leading-relaxed">We are currently transitioning our drying
                        tunnels to biomass and solar-hybrid systems to minimize fossil fuel dependence.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 md:px-20 py-24">
        <div
            class="bg-background-light rounded-3xl p-12 md:p-20 text-center relative overflow-hidden border border-primary/5">
            <div class="relative z-10 max-w-2xl mx-auto space-y-8">
                <h2 class="text-slate-900 text-4xl md:text-5xl font-black">Join Our Green
                    Journey</h2>
                <p class="text-slate-600 text-lg">Partner with PT CPL to transition your
                    egg supply chain to truly sustainable, high-performance packaging.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <button
                        class="w-full sm:w-auto flex min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-base font-bold shadow-xl hover:scale-105 transition-all">
                        Contact Sustainability Team
                    </button>
                    <button
                        class="w-full sm:w-auto flex min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-white text-primary border border-primary/20 text-base font-bold shadow-sm hover:bg-slate-50 transition-all">
                        Request Sample Kit
                    </button>
                </div>
            </div>
            <div
                class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/5 rounded-full -translate-x-1/2 translate-y-1/2">
            </div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full translate-x-1/3 -translate-y-1/3">
            </div>
        </div>
    </section>
</div>
@endsection