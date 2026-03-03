@extends('front.layouts.app')
@section('title', __('seo.home.title'))
@section('meta_description', __('seo.home.description'))
@section('meta_keywords',__('seo.home.keywords'))
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
                        Leading Eco-Friendly Manufacturer
                    </div>
                    <h1 class="text-slate-900 text-5xl md:text-7xl font-black leading-[1.1] tracking-tight">
                        Sustainable Packaging for <span class="text-primary">Global Markets</span>
                    </h1>
                    <p class="text-slate-600 text-lg md:text-xl max-w-xl leading-relaxed">
                        PT CPL is Indonesia's premier egg tray manufacturer, delivering high-quality, 100%
                        recycled paper packaging solutions to industries worldwide.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-base font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                            Request a Quote
                        </button>
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-white border-2 border-slate-200 text-slate-900 text-base font-bold hover:bg-slate-50 transition-all">
                            Our Products
                        </button>
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
                        <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-1">Production
                            Capacity</p>
                        <p class="text-slate-900 text-3xl font-black">500,000+ Units</p>
                        <div class="mt-2 flex items-center gap-1 text-emerald-600 font-bold text-sm">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            <span>Scale-ready infrastructure</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 p-8 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">public</span>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-1">Export Network
                        </p>
                        <p class="text-slate-900 text-3xl font-black">20+ Countries</p>
                        <div class="mt-2 flex items-center gap-1 text-emerald-600 font-bold text-sm">
                            <span class="material-symbols-outlined text-sm">language</span>
                            <span>Across 4 continents</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 p-8 bg-white rounded-xl shadow-sm border border-slate-100">
                    <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">verified</span>
                    </div>
                    <div>
                        <p class="text-slate-500 text-sm font-bold uppercase tracking-wider mb-1">Industry
                            Presence</p>
                        <p class="text-slate-900 text-3xl font-black">15+ Years</p>
                        <div class="mt-2 flex items-center gap-1 text-emerald-600 font-bold text-sm">
                            <span class="material-symbols-outlined text-sm">workspace_premium</span>
                            <span>Certified Quality Standards</span>
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
                    <h2 class="text-slate-900 text-4xl font-black tracking-tight mb-4">Global Reach &amp;
                        Logistics</h2>
                    <p class="text-slate-600 text-lg">Strategically located in Indonesia, our manufacturing hub
                        serves major markets across Asia, Australia, and the Middle East with efficient
                        logistics and timely delivery.</p>
                </div>
                <div class="flex gap-4">
                    <div class="flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-lg text-slate-700 font-bold text-sm">
                        <span class="size-2 rounded-full bg-primary"></span>
                        Headquarters
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-lg text-slate-700 font-bold text-sm">
                        <span class="size-2 rounded-full bg-accent"></span>
                        Major Ports
                    </div>
                </div>
            </div>
            <div
                class="w-full bg-slate-100 aspect-video md:aspect-[21/9] rounded-2xl overflow-hidden border border-slate-200 relative group shadow-inner">
                <div class="absolute inset-0 bg-cover bg-center opacity-80"
                    data-alt="Abstract world map showing shipping routes and global connections" data-location="World Map"
                    style="background-image: url('https://placeholder.pics/svg/300')">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent"></div>
                <div class="absolute top-1/2 left-1/4 group-hover:scale-110 transition-transform cursor-pointer">
                    <div class="relative">
                        <span class="flex h-4 w-4">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-4 w-4 bg-primary"></span>
                        </span>
                        <div
                            class="absolute bottom-6 left-1/2 -translate-x-1/2 bg-white px-3 py-1 rounded shadow text-[10px] font-bold whitespace-nowrap">
                            Production Hub</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary text-white py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="flex flex-col gap-8">
                    <h2 class="text-4xl md:text-5xl font-black leading-tight">Ready to switch to sustainable
                        packaging?</h2>
                    <p class="text-white/80 text-lg leading-relaxed">
                        Get in touch with our export specialists to discuss your requirements, custom tray
                        designs, or bulk order pricing. We provide end-to-end support for global logistics.
                    </p>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-4">
                            <div class="size-10 rounded-full bg-white/10 flex items-center justify-center">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <span class="text-lg font-medium">sales@ptcpl.com</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="size-10 rounded-full bg-white/10 flex items-center justify-center">
                                <span class="material-symbols-outlined">call</span>
                            </div>
                            <span class="text-lg font-medium">+62 21 5555 1234</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 md:p-10 shadow-2xl">
                    <h3 class="text-slate-900 text-2xl font-bold mb-6">Request Quotation</h3>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1">
                                <label class="text-slate-500 text-xs font-bold uppercase tracking-widest">Full
                                    Name</label>
                                <input
                                    class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                    placeholder="John Doe" type="text" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <label class="text-slate-500 text-xs font-bold uppercase tracking-widest">Company
                                    Email</label>
                                <input
                                    class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                    placeholder="john@company.com" type="email" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-slate-500 text-xs font-bold uppercase tracking-widest">Inquiry
                                Type</label>
                            <select
                                class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900">
                                <option>Bulk Order (Export)</option>
                                <option>Domestic Supply</option>
                                <option>Custom Manufacturing</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-slate-500 text-xs font-bold uppercase tracking-widest">Message</label>
                            <textarea
                                class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring-primary text-slate-900"
                                placeholder="How can we help you?" rows="4"></textarea>
                        </div>
                        <button
                            class="w-full rounded-lg bg-accent text-white h-14 font-black text-lg shadow-lg hover:bg-accent/90 transition-all uppercase tracking-widest"
                            type="submit">
                            Send Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection