@extends('front.layouts.app')
@section('title', 'Produk Detail | PT CPL')
@section('content')
    <div class="flex-1 max-w-7xl mx-auto w-full px-4 md:px-20 py-8">
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-8">
            <a class="hover:text-primary transition-colors" href="#">Products</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <a class="hover:text-primary transition-colors" href="#">Packaging</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-900 font-semibold">Egg Trays</span>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div class="space-y-4">
                <div
                    class="aspect-square rounded-xl bg-slate-200 overflow-hidden border border-slate-200 shadow-sm">
                    <div class="w-full h-full bg-center bg-no-repeat bg-cover"
                        data-alt="Main view of stacked recycled egg trays"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAHwRKf9rYBfNZA31AeQ3x03y0bXLSqNYmsWhgO5hI_jtqmnFcHvsImVwZlVGLt5L2w5Dscpdd5v9zKeiUjdSRnSz1X_rZhQ04tTz69XcaprKWXSHNzylrcSXL_JSEd4P9Cz5wE6VkzxzyCQ120BSsi2ZzsXhF80-OdLIP68CmVr_UMgPgn0Zc1gurD2MxG24BuTFMEpA24occwQL-YvZBU44NqFYQ5STrYEAx_94eVX2xM9A4xZ4Hzs6hXN5u8u7TwsY8dxGJSxSmG');">
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="aspect-square rounded-lg border-2 border-primary overflow-hidden cursor-pointer">
                        <div class="w-full h-full bg-center bg-no-repeat bg-cover"
                            data-alt="Close up of pulp material texture"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBGtN4H8rIL5Izyb-bkMebY9W1WNABqUS7xC96SJYJbDuxJ0spo8An9ZAMQUxwGbxpCz_tm4iPkDcml2xNjbRYDhv1TFMZWk__3OV_88S9vo4ht7uiZ_qsiu_Ve524UA7ZUGN_XFQexHSY99uWlgmIXQBJuel0hIfamNXaFl9ZPToEoCsNBOG7FwlxEvIx53e0pPQbnvRTfYE1frlJrQZtICwdN1-O9SIS8eHIMB50LQmJtoKP8zZ0MgGzI4_WJYtUaoRsuuzaeS9c4');">
                        </div>
                    </div>
                    <div
                        class="aspect-square rounded-lg border border-slate-200 overflow-hidden cursor-pointer hover:border-primary transition-all">
                        <div class="w-full h-full bg-center bg-no-repeat bg-cover"
                            data-alt="Stack of 30-egg trays ready for use"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB8DlZcQLOudRmJVrE9gyzt8mIGk7z0NZu_WoKSNOk6yooGjF8h972qs0kn9AdGfNBsDsrjG2OKXuoLaAk9s1BRHVoENdffEjakeR_ukHDUdEoSlwAnLJ47rsSzBdOjpjtpQHFSN4moz31-KxbhI7kn9d2L4KFu21X4fv-3CwwPBlA0vXeBft0m_AfdjDd8wI2l7JmiSNH5MdSPomw6joH60dmH-U0y01eqRvxX9lFNYweUBKRENp-SjsO3-PbrW4-AX6qB2aGu7OnE');">
                        </div>
                    </div>
                    <div
                        class="aspect-square rounded-lg border border-slate-200 overflow-hidden cursor-pointer hover:border-primary transition-all">
                        <div class="w-full h-full bg-center bg-no-repeat bg-cover"
                            data-alt="Poultry farm storage with egg trays"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAK301x_pLaopZcYzskvUEfGsDf4I5ZBqJbhRZOa7R2wGihBsbAEVvanWKOC-bZP3geP3sRWz2JIAbD6nxBW0AO42hfrxVcXFbd_6cM_bn8W3p4djnu0antvKxMLdRHOBTgNjB3LSEuvFRTq0o84UMVi7Ko_YIKmbsn5jcOo0CfRJdmUyN_zFDHa_gRfyKkDqCFgkLuzYnHfcNhC97L-xbN3D4GB4w9ARfuEc6QSz4w1T80DPJLnOOyrAyghnF7Xg166XcGd3kXDDiw');">
                        </div>
                    </div>
                    <div
                        class="aspect-square rounded-lg border border-slate-200 overflow-hidden cursor-pointer hover:border-primary transition-all bg-slate-100 flex items-center justify-center">
                        <span class="material-symbols-outlined text-slate-400">videocam</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div>
                    <h1 class="text-4xl font-extrabold text-slate-900 leading-tight mb-4 tracking-tight">
                        Premium Recycled Pulp Egg Tray</h1>
                    <p class="text-lg text-slate-600 leading-relaxed">Sustainable, durable, and
                        high-capacity packaging solution engineered for modern commercial poultry operations and
                        eco-conscious retailers.</p>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div
                        class="flex flex-col items-center p-4 rounded-xl bg-primary/5 border border-primary/10">
                        <span class="material-symbols-outlined text-primary mb-2 text-3xl">eco</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">Eco-Friendly</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 rounded-xl bg-primary/5 border border-primary/10">
                        <span class="material-symbols-outlined text-primary mb-2 text-3xl">layers</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">Stackable</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 rounded-xl bg-primary/5 border border-primary/10">
                        <span class="material-symbols-outlined text-primary mb-2 text-3xl">verified</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">Durable</span>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 border border-slate-100">
                    <h3 class="text-lg font-bold mb-4 text-slate-900 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">settings</span>
                        Technical Specifications
                    </h3>
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <div>
                            <p class="text-sm text-slate-500">Dimensions</p>
                            <p class="font-medium">310 x 310 x 50 mm</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Capacity</p>
                            <p class="font-medium">30 Eggs</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Unit Weight</p>
                            <p class="font-medium">70g (+/- 3g)</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Material Type</p>
                            <p class="font-medium">100% Recycled Pulp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="border-t border-slate-200 pt-16 mb-16">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Why Choose Our Pulp Trays?</h2>
                <p class="text-slate-600">Our trays are designed using advanced molding
                    technology to provide maximum protection for your produce while maintaining a 100% biodegradable
                    footprint.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">compost</span>
                    </div>
                    <h4 class="font-bold mb-2">Biodegradable</h4>
                    <p class="text-sm text-slate-500">Completely compostable within 90 days in
                        natural soil conditions.</p>
                </div>
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">health_and_safety</span>
                    </div>
                    <h4 class="font-bold mb-2">Food Safe</h4>
                    <p class="text-sm text-slate-500">FDA-approved recycled fibers with no
                        harmful chemical additives.</p>
                </div>
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">architecture</span>
                    </div>
                    <h4 class="font-bold mb-2">Precise Fit</h4>
                    <p class="text-sm text-slate-500">Universal cup design fits small to
                        extra-large egg sizes securely.</p>
                </div>
                <div class="p-6 bg-white rounded-xl border border-slate-100">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <h4 class="font-bold mb-2">Space Saving</h4>
                    <p class="text-sm text-slate-500">High-nesting density reduces storage space
                        and logistics costs.</p>
                </div>
            </div>
        </section>
    </div>
@endsection