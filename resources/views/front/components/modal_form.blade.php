<div class="fixed inset-0 z-[100] flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>
    <div
        class="relative w-full max-w-2xl bg-white dark:bg-slate-900 rounded-3xl shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-300">
        <!-- Modal Header -->
        <div
            class="bg-slate-50 dark:bg-slate-800/50 px-8 py-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="size-12 flex items-center justify-center bg-primary text-white rounded-xl shadow-lg">
                    <span class="material-symbols-outlined text-2xl">factory</span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white font-technical tracking-tight">
                        Inquire Export Rates</h2>
                    <p class="text-sm text-slate-500 font-medium">Global Logistics &amp; Distribution Solutions</p>
                </div>
            </div>
            <button
                class="size-10 flex items-center justify-center rounded-full hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors text-slate-400">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <!-- Modal Content -->
        <form class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Full Name</label>
                    <input
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                        placeholder="John Doe" type="text" />
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Company Name</label>
                    <input
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                        placeholder="Global Logistics Co." type="text" />
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Country</label>
                    <select
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none">
                        <option>Select Country</option>
                        <option>Australia</option>
                        <option>United Arab Emirates</option>
                        <option>Netherlands</option>
                        <option>South Africa</option>
                        <option>United States</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Email Address</label>
                    <input
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                        placeholder="john@company.com" type="email" />
                </div>
                <div class="md:col-span-2 space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Phone Number</label>
                    <input
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                        placeholder="+1 (555) 000-0000" type="tel" />
                </div>
                <div class="md:col-span-2 space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Inquiry
                        Message</label>
                    <textarea
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none resize-none"
                        placeholder="Tell us about your volume requirements and destination port..."
                        rows="4"></textarea>
                </div>
            </div>
            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4">
                <button
                    class="flex-1 bg-primary hover:bg-primary/90 text-white font-bold py-4 px-8 rounded-xl shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5 flex items-center justify-center gap-2"
                    type="submit">
                    <span class="material-symbols-outlined text-xl">send</span>
                    Send Inquiry
                </button>
                <button
                    class="px-8 py-4 text-slate-500 font-bold hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-all"
                    type="button">
                    Cancel
                </button>
            </div>
        </form>
        <!-- Footer Decor -->
        <div
            class="px-8 py-4 bg-slate-50 dark:bg-slate-800/30 flex items-center gap-2 text-[10px] uppercase font-bold tracking-[0.2em] text-slate-400 border-t border-slate-100 dark:border-slate-800">
            <span class="material-symbols-outlined text-xs text-accent">verified</span>
            Certified Pulp Packaging Solutions Hub
        </div>
    </div>
</div>