@extends('admin.layouts.app')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Settings</h2>
@endsection
@section('content')
    <div class="w-full overflow-y-auto px-8 py-8">
        <div class="mb-6">
            <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-slate-100">System
                Settings</h1>
            <p class="text-sm text-slate-500 dark:text-slate-400">Manage environment, localization, and security
                preferences.</p>
        </div>
        <div class="flex flex-col lg:flex-row gap-6">

            <!-- Sidebar Navigation -->
            <aside class="w-full lg:w-64 flex-shrink-0">
                <nav
                    class="flex lg:flex-col overflow-x-auto lg:overflow-visible gap-2 p-2 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">

                    <button
                        class="flex items-center gap-2 px-4 py-2.5 bg-primary text-white rounded-lg text-sm font-bold whitespace-nowrap">
                        <span class="material-symbols-outlined text-lg">info</span> General
                    </button>

                    <button
                        class="flex items-center gap-2 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium whitespace-nowrap">
                        <span class="material-symbols-outlined text-lg">language</span> SEO
                    </button>

                    <button
                        class="flex items-center gap-2 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium whitespace-nowrap">
                        <span class="material-symbols-outlined text-lg">lock</span> Security
                    </button>

                    <button
                        class="flex items-center gap-2 px-4 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-sm font-medium whitespace-nowrap">
                        <span class="material-symbols-outlined text-lg">terminal</span> System
                    </button>

                </nav>
            </aside>

            <!-- Content -->
            <div class="flex-1 space-y-6">

                <!-- General Section -->
                <section
                    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden">

                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800">
                        <h3 class="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider">
                            General Information
                        </h3>
                    </div>

                    <div class="p-6 space-y-4">

                        <!-- Company + Logo -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

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
                                        class="px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-lg text-xs font-bold hover:bg-slate-50">
                                        Change
                                    </button>

                                </div>
                            </div>

                        </div>

                        <!-- Email + Phone -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

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

                        <!-- Address -->
                        <div class="space-y-1">

                            <label class="text-xs font-bold text-slate-500 uppercase">
                                Headquarters Address
                            </label>

                            <textarea rows="2"
                                class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary">
    Jl. Industri Raya No. 45, Kawasan Industri Jababeka, Cikarang
                        </textarea>

                        </div>

                    </div>
                </section>

                <!-- Toggle -->
                <div
                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 p-4 bg-primary/5 rounded-xl border border-primary/10">

                    <div class="flex items-center gap-3">
                        <div class="size-8 rounded-full bg-primary/20 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm">bolt</span>
                        </div>
                        <p class="text-sm font-bold">Auto-save draft changes</p>
                    </div>

                    <label class="inline-flex items-center cursor-pointer">
                        <input checked class="sr-only peer" type="checkbox" />
                        <div class="relative w-11 h-6 bg-slate-300 rounded-full peer dark:bg-slate-700
                        peer-checked:after:translate-x-full after:content-['']
                        after:absolute after:top-[2px] after:left-[2px]
                        after:bg-white after:border after:rounded-full
                        after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                        </div>
                    </label>

                </div>

                <!-- Footer -->
                <div class="flex flex-col sm:flex-row sm:justify-end gap-3 pt-4">

                    <button class="px-5 py-2 text-sm font-bold text-slate-500 hover:text-slate-800">
                        Discard
                    </button>

                    <button
                        class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-md shadow-primary/20 hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-sm">save</span>
                        Save Changes
                    </button>

                </div>

            </div>
        </div>
    </div>
@endsection