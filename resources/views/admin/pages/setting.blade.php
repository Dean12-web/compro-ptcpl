@extends('admin.layouts.app')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Settings</h2>
@endsection
@section('content')
    <div class="w-full px-8 py-8">
        <div class="mb-6">
            <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-slate-100">System
                Settings</h1>
            <p class="text-sm text-slate-500 dark:text-slate-400">Manage environment, localization, and security
                preferences.</p>
        </div>
        <div class="flex gap-8 items-start">
            <!-- Sidebar Navigation -->
            <aside class="w-64 flex-shrink-0">
                <nav
                    class="flex flex-col gap-1 p-1 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                    <button
                        class="flex items-center gap-3 px-4 py-2.5 bg-primary text-white rounded-lg text-sm font-bold transition-all">
                        <span class="material-symbols-outlined text-lg">info</span> General
                    </button>
                    <button
                        class="flex items-center gap-3 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium transition-all">
                        <span class="material-symbols-outlined text-lg">language</span> SEO &amp; Localization
                    </button>
                    <button
                        class="flex items-center gap-3 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium transition-all">
                        <span class="material-symbols-outlined text-lg">lock</span> Security &amp; Account
                    </button>
                    <button
                        class="flex items-center gap-3 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium transition-all">
                        <span class="material-symbols-outlined text-lg">terminal</span> System
                    </button>
                </nav>
            </aside>
            <!-- Compact Form Content -->
            <div class="flex-1 space-y-6">
                <!-- General Section -->
                <section
                    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800">
                        <h3 class="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider">
                            General Information</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Company Name</label>
                                <input
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                    type="text" value="PT Cipta Perdana Lestari" />
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Corporate Logo</label>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-9 rounded bg-slate-100 dark:bg-slate-800 border border-slate-200 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-slate-400 text-sm">image</span>
                                    </div>
                                    <button
                                        class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-xs font-bold hover:bg-slate-50">Change</button>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Contact Email</label>
                                <input
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                    type="email" value="info@ptcpl.co.id" />
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold text-slate-500 uppercase">Phone Number</label>
                                <input
                                    class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                    type="tel" value="+62 21 555 1234" />
                            </div>
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-500 uppercase">Headquarters
                                Address</label>
                            <textarea
                                class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary"
                                rows="2">Jl. Industri Raya No. 45, Kawasan Industri Jababeka, Cikarang, Bekasi, Jawa Barat 17530, Indonesia</textarea>
                        </div>
                    </div>
                </section>
                <!-- Quick Toggle / Actions Bar -->
                <div class="flex items-center justify-between p-4 bg-primary/5 rounded-xl border border-primary/10">
                    <div class="flex items-center gap-3">
                        <div class="size-8 rounded-full bg-primary/20 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm">bolt</span>
                        </div>
                        <p class="text-sm font-bold">Auto-save draft changes</p>
                    </div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div
                            class="relative w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                        </div>
                    </label>
                </div>
                <!-- Footer Actions -->
                <div class="flex items-center justify-end gap-3 pt-4">
                    <button class="px-5 py-2 text-sm font-bold text-slate-500 hover:text-slate-800">Discard</button>
                    <button
                        class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-md shadow-primary/20 hover:bg-primary/90 transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">save</span> Save Changes
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection