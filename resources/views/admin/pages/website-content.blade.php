@extends('admin.layouts.app')
@section('title','Web Sections')
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
    <div>
        <div class="max-w-6xl mx-auto">
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-slate-100 tracking-tight">Website
                        Content Sections</h2>
                    <p class="text-slate-500 mt-1">Manage and edit live content blocks for the corporate
                        website.</p>
                </div>
                <button
                    class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-lg font-bold shadow-sm hover:bg-primary/90">
                    <span class="material-symbols-outlined text-xl">add_circle</span>
                    <span>Add New Section</span>
                </button>
            </div>
            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Table Section -->
                <div class="lg:col-span-8 flex flex-col gap-6">
                    <!-- Tabs -->
                    <div class="flex border-b border-primary/10 gap-8">
                        <button class="border-b-2 border-primary text-primary pb-3 font-bold text-sm">All
                            Sections</button>
                        <button class="text-slate-400 pb-3 font-medium text-sm hover:text-slate-600">Live</button>
                        <button class="text-slate-400 pb-3 font-medium text-sm hover:text-slate-600">Drafts</button>
                    </div>
                    <!-- Table -->
                    <div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/10 shadow-sm overflow-hidden">
                        <table class="w-full text-left">
                            <thead class="bg-slate-50 dark:bg-white/5 border-b border-primary/10">
                                <tr>
                                    <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Section
                                        Name</th>
                                    <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Last
                                        Updated</th>
                                    <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-center">
                                        Status</th>
                                    <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-primary/5">
                                <tr class="hover:bg-primary/5 group cursor-pointer">
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-bold text-slate-900 dark:text-slate-100">Hero
                                                Tagline</span>
                                            <span class="text-xs text-slate-400">Homepage - Header
                                                Section</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Oct 24,
                                        2023</td>
                                    <td class="px-6 py-5">
                                        <div class="flex justify-center">
                                            <span
                                                class="px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full text-xs font-bold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-sm">check_circle</span>
                                                Live
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <button class="text-primary font-bold text-sm hover:underline">Edit</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-primary/5 group cursor-pointer bg-primary/[0.02]">
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-bold text-slate-900 dark:text-slate-100">Company
                                                Intro</span>
                                            <span class="text-xs text-slate-400">About Us - Main
                                                Paragraph</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Oct 20,
                                        2023</td>
                                    <td class="px-6 py-5">
                                        <div class="flex justify-center">
                                            <span
                                                class="px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full text-xs font-bold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-sm">check_circle</span>
                                                Live
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <button class="text-primary font-bold text-sm hover:underline">Edit</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-primary/5 group cursor-pointer">
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-bold text-slate-900 dark:text-slate-100">Mission
                                                Statement</span>
                                            <span class="text-xs text-slate-400">About Us - Vision &amp;
                                                Mission</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Oct 15,
                                        2023</td>
                                    <td class="px-6 py-5">
                                        <div class="flex justify-center">
                                            <span
                                                class="px-3 py-1 bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400 rounded-full text-xs font-bold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-sm">edit_note</span>
                                                Draft
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <button class="text-primary font-bold text-sm hover:underline">Edit</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-primary/5 group cursor-pointer">
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-bold text-slate-900 dark:text-slate-100">Contact
                                                Footer</span>
                                            <span class="text-xs text-slate-400">Global - Footer Info</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Sep 28,
                                        2023</td>
                                    <td class="px-6 py-5">
                                        <div class="flex justify-center">
                                            <span
                                                class="px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full text-xs font-bold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-sm">check_circle</span>
                                                Live
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <button class="text-primary font-bold text-sm hover:underline">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Editor Preview (Side Panel) -->
                <div class="lg:col-span-4">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl border border-primary/20 shadow-lg sticky top-8 flex flex-col h-full max-h-[calc(100vh-160px)]">
                        <div class="p-5 border-b border-primary/10 flex justify-between items-center">
                            <h3 class="font-bold text-slate-900 dark:text-slate-100">Editor: <span class="text-primary">Hero
                                    Tagline</span></h3>
                            <button
                                class="h-8 w-8 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 flex items-center justify-center text-slate-400">
                                <span class="material-symbols-outlined">close</span>
                            </button>
                        </div>
                        <div class="p-6 overflow-y-auto flex-1 custom-scrollbar">
                            <div class="mb-6">
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Content
                                    Status</label>
                                <div class="flex items-center gap-4">
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 py-2 px-4 rounded-lg border-2 border-primary bg-primary/10 text-primary font-bold text-sm">
                                        <span class="material-symbols-outlined text-lg">public</span> Live
                                    </button>
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 py-2 px-4 rounded-lg border-2 border-transparent bg-slate-100 dark:bg-white/5 text-slate-500 font-medium text-sm">
                                        <span class="material-symbols-outlined text-lg">edit_document</span>
                                        Draft
                                    </button>
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Headline
                                    Text</label>
                                <input
                                    class="w-full rounded-lg border-primary/20 bg-slate-50 dark:bg-white/5 text-sm font-medium focus:ring-primary focus:border-primary px-4 py-2.5"
                                    type="text" value="Industrial Excellence in Civil Engineering" />
                            </div>
                            <div class="mb-6">
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Rich Text
                                    Body</label>
                                <div class="border border-primary/20 rounded-lg overflow-hidden">
                                    <div class="bg-slate-50 dark:bg-white/10 border-b border-primary/10 p-2 flex gap-1">
                                        <button class="p-1.5 hover:bg-white rounded text-slate-600"><span
                                                class="material-symbols-outlined text-lg">format_bold</span></button>
                                        <button class="p-1.5 hover:bg-white rounded text-slate-600"><span
                                                class="material-symbols-outlined text-lg">format_italic</span></button>
                                        <button class="p-1.5 hover:bg-white rounded text-slate-600"><span
                                                class="material-symbols-outlined text-lg">link</span></button>
                                        <div class="w-px h-6 bg-primary/10 mx-1 self-center"></div>
                                        <button class="p-1.5 hover:bg-white rounded text-slate-600"><span
                                                class="material-symbols-outlined text-lg">format_list_bulleted</span></button>
                                        <button class="p-1.5 hover:bg-white rounded text-slate-600"><span
                                                class="material-symbols-outlined text-lg">format_align_left</span></button>
                                    </div>
                                    <textarea
                                        class="w-full border-none bg-white dark:bg-background-dark text-sm p-4 focus:ring-0"
                                        rows="6">With over 30 years of experience, PT CPL provides top-tier industrial solutions for global engineering projects. We specialize in heavy-duty construction and sustainable industrial development.</textarea>
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="block text-xs font-bold text-slate-500 uppercase mb-2">Background
                                    Image</label>
                                <div
                                    class="relative group h-40 rounded-lg overflow-hidden border-2 border-dashed border-primary/30 flex items-center justify-center bg-slate-50 dark:bg-white/5">
                                    <div class="absolute inset-0 opacity-40 group-hover:opacity-20 transition-opacity"
                                        data-alt="Abstract industrial construction site background"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAcThHdqjCOliK7fDJahifuo_Ygs7KXiZBpzSXckd69105yJyoegg2__9Eox5QPQJnynrGIRwz2yTPm03h-HEq914h6wtdOoUXkhFzFdZRlL_e5ve3O-V65ZehtPCMU1eyruAhhU4fkG2J_iyTjU1AUj7JUDG6YfBwyYB2L2UTxwYcPjX-wdW6lHh9f0DQ9eSHJwTKSQg7b1uPqiAxCejP_a_K4VhjqFN8bLlOLg-TYmF_tmhX1swTlojR5q0dFRarGkCZwU3Q7rTVB'); background-size: cover; background-position: center;">
                                    </div>
                                    <div class="relative z-10 flex flex-col items-center gap-1">
                                        <span class="material-symbols-outlined text-primary text-3xl">upload_file</span>
                                        <span class="text-xs font-bold text-primary">Replace Media</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 border-t border-primary/10 bg-slate-50 dark:bg-white/5 flex gap-3">
                            <button
                                class="flex-1 py-2.5 bg-primary text-white rounded-lg font-bold text-sm shadow-md hover:bg-primary/90 transition-colors">Publish
                                Live</button>
                            <button
                                class="px-5 py-2.5 bg-white dark:bg-white/10 border border-primary/20 text-slate-600 dark:text-slate-300 rounded-lg font-bold text-sm hover:bg-slate-50 transition-colors">Save
                                Draft</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection