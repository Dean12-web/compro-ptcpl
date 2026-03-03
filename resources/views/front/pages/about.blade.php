@extends('front.layouts.app')
@section('title', __('seo.about.title'))
@section('meta_description', __('seo.about.description'))
@section('meta_keywords',__('seo.about.keywords'))
@section('og_title', __('seo.about.title'))
@section('og_description', __('seo.about.description'))

@section('content')
<div class="flex flex-col items-center">
    <div class="max-w-[1200px] w-full">
        <section class="px-4 md:px-10 py-8">
            <div class="relative min-h-[400px] w-full overflow-hidden rounded-xl bg-primary/20">
                <div class="absolute inset-0 bg-cover bg-center"
                    data-alt="Modern high-tech industrial manufacturing facility interior"
                    style='background-image: linear-gradient(to top, rgba(26, 28, 22, 0.8), transparent), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCblB03g3ukou34gITWacwvADek1HAAzdFR18u5whyvOVc_o0lNHVny1wVLMQAkvUhmp4ab0VDPWC0XeFye35GbNYbxbuvb8dUuP4VT59pPXGk8UR296dIR9csw83D3Kma4QqiB29nC1gvBDbOytOsNn2X4fldpswTqiA_UrB5zksXDctcuwa-tV1MwjPhzLUTV2LnZEeH2bERT36H5ltg7OMLZHn9tvrAljx3P8-jJRTCXJd_QLl97dyjAFwcgTA5izmVSkr19TyaT");'>
                </div>
                <div class="absolute bottom-0 left-0 p-8 md:p-12 w-full">
                    <span
                        class="bg-primary text-white px-3 py-1 rounded text-xs font-bold uppercase tracking-widest mb-4 inline-block">Since
                        1995</span>
                    <h1 class="text-white text-4xl md:text-6xl font-black tracking-tight max-w-2xl">Building
                        the Future of Industrial Manufacturing</h1>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-10 py-12 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-2">Company Profile
                </h2>
                <h3 class="text-slate-900 text-3xl md:text-4xl font-black leading-tight mb-6">
                    A Legacy of Innovation and Excellence.</h3>
                <p class="text-slate-600 text-lg leading-relaxed mb-6">
                    PT CPL stands at the forefront of the industrial manufacturing sector, providing
                    integrated solutions that power global supply chains. For nearly three decades, we have
                    evolved from a local parts manufacturer into a comprehensive industrial partner.
                </p>
                <p class="text-slate-600 text-lg leading-relaxed">
                    Our commitment to precision engineering and sustainable practices has made us a trusted
                    name for Fortune 500 companies across aerospace, automotive, and renewable energy
                    sectors.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-primary/5 p-8 rounded-xl border border-primary/10">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">rocket_launch</span>
                    <h4 class="font-bold text-xl mb-2 text-slate-900">Our Mission</h4>
                    <p class="text-sm text-slate-600">To deliver precision-engineered
                        industrial components while minimizing environmental impact through innovative
                        manufacturing.</p>
                </div>
                <div class="bg-primary/5 p-8 rounded-xl border border-primary/10">
                    <span class="material-symbols-outlined text-primary text-4xl mb-4">visibility</span>
                    <h4 class="font-bold text-xl mb-2 text-slate-900">Our Vision</h4>
                    <p class="text-sm text-slate-600">To be the global benchmark for
                        sustainable industrial excellence and the first choice for complex engineering
                        challenges.</p>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-10 py-16 bg-primary/5 rounded-3xl mx-4 md:mx-10 my-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-2">Our Core Values
                </h2>
                <h3 class="text-slate-900 text-3xl font-black mb-4">The Principles That
                    Guide Us</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-10 rounded-2xl shadow-sm border border-primary/5 text-center">
                    <div
                        class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">verified</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Uncompromising Quality</h4>
                    <p class="text-slate-600">We adhere to the highest international
                        standards, ensuring every product meeting our "Zero Defect" policy.</p>
                </div>
                <div
                    class="bg-white p-10 rounded-2xl shadow-sm border border-primary/5 text-center">
                    <div
                        class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">eco</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Sustainability</h4>
                    <p class="text-slate-600">Implementing circular economy principles
                        and green energy in all our production facilities.</p>
                </div>
                <div
                    class="bg-white p-10 rounded-2xl shadow-sm border border-primary/5 text-center">
                    <div
                        class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">gavel</span>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Integrity</h4>
                    <p class="text-slate-600">Operating with absolute transparency and
                        ethical standards in all business relationships and operations.</p>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-10 py-16 border-t border-primary/10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="max-w-md">
                    <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-2">Legal
                        Certifications</h2>
                    <h3 class="text-slate-900 text-2xl font-black mb-4">Certified for
                        Excellence</h3>
                    <p class="text-slate-600">Our facilities and processes are audited
                        annually by international bodies to ensure compliance with global safety and quality
                        regulations.</p>
                </div>
                <div
                    class="flex flex-wrap justify-center gap-6 md:gap-12 opacity-80 grayscale hover:grayscale-0 transition-all">
                    <div class="flex flex-col items-center gap-2">
                        <div
                            class="size-20 bg-white rounded-lg flex items-center justify-center border border-primary/10 shadow-sm">
                            <span class="material-symbols-outlined text-4xl text-primary">workspace_premium</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase text-slate-500">ISO 9001:2015</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div
                            class="size-20 bg-white rounded-lg flex items-center justify-center border border-primary/10 shadow-sm">
                            <span class="material-symbols-outlined text-4xl text-primary">assignment_turned_in</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase text-slate-500">ISO 14001</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div
                            class="size-20 bg-white rounded-lg flex items-center justify-center border border-primary/10 shadow-sm">
                            <span class="material-symbols-outlined text-4xl text-primary">security_update_good</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase text-slate-500">OHSAS 18001</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div
                            class="size-20 bg-white rounded-lg flex items-center justify-center border border-primary/10 shadow-sm">
                            <span class="material-symbols-outlined text-4xl text-primary">health_and_safety</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase text-slate-500">Safety First</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-10 py-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-12 border-y border-primary/10">
                <div class="text-center">
                    <p class="text-4xl font-black text-primary mb-1">28+</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-tighter">Years of
                        Industry Experience</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-black text-primary mb-1">500+</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-tighter">Certified
                        Professionals</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-black text-primary mb-1">12k+</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-tighter">Projects
                        Completed</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-black text-primary mb-1">15</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-tighter">Global
                        Locations</p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection