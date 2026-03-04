@extends('admin.layouts.app')
@section('title', 'Inquiry')
@section('content')
    <header
        class="h-16 border-b border-primary/10 bg-white dark:bg-background-dark flex items-center justify-between px-8 z-10">
        <div class="flex items-center gap-4">
            <span class="text-slate-400">/</span>
            <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Management</span>
            <span class="text-slate-400">/</span>
            <span class="text-sm font-bold text-primary">Countries</span>
        </div>
    </header>
    <div class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark p-6 md:p-10">
        
            <!-- Header Actions -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div class="flex flex-col gap-1">
                    <div class="flex items-center gap-3">
                        <h2 class="text-3xl font-black text-slate-900 dark:text-slate-100 tracking-tight leading-none">
                            Johnathan Doe</h2>
                        <span
                            class="bg-primary/20 text-primary text-xs font-bold px-2.5 py-1 rounded uppercase tracking-wide">New</span>
                    </div>
                    <p class="text-slate-500 dark:text-slate-400 flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">event</span>
                        Received on October 24, 2023 · 14:32 GMT+7
                    </p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="flex-1 md:flex-none px-6 h-11 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-lg">reply</span>
                        Mark as Replied
                    </button>
                    <button
                        class="flex items-center justify-center size-11 bg-white dark:bg-slate-800 border border-primary/10 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined">more_vert</span>
                    </button>
                </div>
            </div>
            <!-- Inquiry Details Card -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Buyer Information -->
                <div class="lg:col-span-1 flex flex-col gap-6">
                    <div class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-primary/5">
                        <h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-4">Buyer
                            Profile</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-xs text-slate-400 font-medium uppercase mb-1">Company</p>
                                <p class="text-sm font-bold text-slate-900 dark:text-slate-100">Global Trade
                                    Solutions Inc.</p>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-medium uppercase mb-1">Country</p>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm font-bold text-slate-900 dark:text-slate-100">United
                                        States</span>
                                    <span class="material-symbols-outlined text-sm text-slate-400">flag</span>
                                </div>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-medium uppercase mb-1">Email</p>
                                <a class="text-sm font-bold text-primary hover:underline"
                                    href="mailto:j.doe@gts-global.com">j.doe@gts-global.com</a>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-medium uppercase mb-1">Phone</p>
                                <p class="text-sm font-bold text-slate-900 dark:text-slate-100">+1 (555)
                                    0123-4567</p>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-primary/5">
                            <button
                                class="w-full py-2 bg-primary/5 text-primary text-sm font-bold rounded-lg hover:bg-primary/10 transition-colors">
                                View History
                            </button>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm border border-primary/5">
                        <div class="h-32 bg-slate-200" data-alt="Simplified map showing buyer location in Chicago"
                            data-location="Chicago, USA"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDLEqT5dK8AQ5DnkpPu3BIVgtjEcNMcXqmWjntAo35_w0Td3I9lK-7do4ZEkStLrTg22TbbyEFHpSDtzAfNw4K3e5yULOjUgq36Ve7bGITfrI3QeKjXYtY2fqITJpcbKJQhwMkYLhKDVeYWP9BVff1aBk8PEbMMc3k1isXhyqvAi4AgIC3rJQu_zvjd06pV8j63SH-5lMUl8FuKnP2xlILI1EUWcNblMj20fYdUUzU1FkrPFeRXNBwdqMpT0ICIba0xeZPBzk2aixlJ'); background-size: cover;">
                        </div>
                        <div class="p-4">
                            <p class="text-xs text-slate-500 text-center italic">IP Location: Chicago,
                                Illinois</p>
                        </div>
                    </div>
                </div>
                <!-- Message Content -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white dark:bg-slate-900 rounded-xl p-8 shadow-sm border border-primary/5">
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-primary/5">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">Inquiry Message
                            </h3>
                            <span class="material-symbols-outlined text-slate-300">format_quote</span>
                        </div>
                        <div class="prose dark:prose-invert max-w-none text-slate-700 dark:text-slate-300 leading-relaxed">
                            <p class="mb-4">Dear Sales Team at PT CPL,</p>
                            <p class="mb-4">We are a leading distributor of high-quality agricultural
                                products in the Midwestern United States. We have recently reviewed your
                                export catalog for Grade A Coffee Beans and are very interested in
                                establishing a long-term sourcing partnership.</p>
                            <p class="mb-4 font-semibold text-slate-900 dark:text-slate-100 italic">"Could
                                you please provide a formal quotation for 5 metric tons of Arabica Gayo
                                beans (Grade 1) with CIF Chicago port terms?"</p>
                            <p class="mb-4">Additionally, we would appreciate information regarding:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Standard lead times from order confirmation to shipment.</li>
                                <li>Organic and Fair Trade certification availability.</li>
                                <li>Available packaging sizes for bulk wholesale (25kg vs 50kg bags).</li>
                            </ul>
                            <p class="mb-4">We look forward to hearing from you soon to discuss this
                                potential order further.</p>
                            <p>Best regards,<br /><strong>Johnathan Doe</strong><br />Senior Procurement
                                Officer</p>
                        </div>
                    </div>
                    <!-- Quick Reply / Internal Notes -->
                    <div class="bg-primary/5 rounded-xl p-6 border border-primary/10">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-primary">edit_note</span>
                            <h4 class="font-bold text-primary text-sm uppercase tracking-wider">Internal
                                Notes</h4>
                        </div>
                        <textarea
                            class="w-full bg-white dark:bg-slate-800 border-primary/10 rounded-lg text-sm focus:ring-primary focus:border-primary p-3"
                            placeholder="Add a note about this inquiry for the team..." rows="3"></textarea>
                        <div class="flex justify-end mt-3">
                            <button
                                class="px-4 py-2 bg-primary/10 text-primary text-xs font-bold rounded-lg hover:bg-primary/20">Save
                                Note</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Pagination/Navigation -->
            <div class="mt-8 pt-6 border-t border-primary/10 flex justify-between items-center text-sm">
                <button class="flex items-center gap-2 text-slate-500 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                    Previous Inquiry
                </button>
                <button class="flex items-center gap-2 text-slate-500 hover:text-primary transition-colors">
                    Next Inquiry
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
@endsection