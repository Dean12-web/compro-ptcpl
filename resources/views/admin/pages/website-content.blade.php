@extends('admin.layouts.app')
@section('title', 'Web Sections')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Web Section</h2>
@endsection
@section('content')
    <div class="flex-1 overflow-y-auto p-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Website Content Sections</h1>
                <p class="text-slate-500 mt-1">Manage and edit live content blocks for the corporate website.</p>
            </div>
            <button
                class="flex items-center gap-2 bg-primary text-white px-6 py-2.5 rounded-lg font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-sm">add</span>
                <span>Add New Section</span>
            </button>
        </div>
        <div class="lg:col-span-8 flex flex-col gap-6">
            <!-- Tabs -->
            <div class="flex border-b border-primary/10 gap-8">
                <button class="border-b-2 border-primary text-primary pb-3 font-bold text-sm">All
                    Sections</button>
                <button class="text-slate-400 pb-3 font-medium text-sm hover:text-slate-600">Live</button>
                <button class="text-slate-400 pb-3 font-medium text-sm hover:text-slate-600">Drafts</button>
            </div>
            <!-- Table -->
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/10 shadow-sm">

                <!-- Desktop / Tablet Table -->
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full min-w-[700px] text-left">
                        <thead class="bg-slate-50 dark:bg-white/5 border-b border-primary/10">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Section Name</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Last Updated</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-center">Status</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-right">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-primary/5">

                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-5">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-900 dark:text-white">
                                            Hero Tagline
                                        </span>
                                        <span class="text-xs text-slate-400">
                                            Homepage - Header Section
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">
                                    Oct 24, 2023
                                </td>

                                <td class="px-6 py-5 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                        Live
                                    </span>
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <button class="text-primary font-bold text-sm hover:underline">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-5">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-900 dark:text-white">
                                            Hero Tagline
                                        </span>
                                        <span class="text-xs text-slate-400">
                                            Homepage - Header Section
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">
                                    Oct 24, 2023
                                </td>

                                <td class="px-6 py-5 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                        Live
                                    </span>
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <button class="text-primary font-bold text-sm hover:underline">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-5">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-900 dark:text-white">
                                            Hero Tagline
                                        </span>
                                        <span class="text-xs text-slate-400">
                                            Homepage - Header Section
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">
                                    Oct 24, 2023
                                </td>

                                <td class="px-6 py-5 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                        Live
                                    </span>
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <button class="text-primary font-bold text-sm hover:underline">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-5">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-900 dark:text-white">
                                            Hero Tagline
                                        </span>
                                        <span class="text-xs text-slate-400">
                                            Homepage - Header Section
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">
                                    Oct 24, 2023
                                </td>

                                <td class="px-6 py-5 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                        Live
                                    </span>
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <button class="text-primary font-bold text-sm hover:underline">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-5">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-900 dark:text-white">
                                            Hero Tagline
                                        </span>
                                        <span class="text-xs text-slate-400">
                                            Homepage - Header Section
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">
                                    Oct 24, 2023
                                </td>

                                <td class="px-6 py-5 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                        Live
                                    </span>
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <button class="text-primary font-bold text-sm hover:underline">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-5">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-slate-900 dark:text-white">
                                            Hero Tagline
                                        </span>
                                        <span class="text-xs text-slate-400">
                                            Homepage - Header Section
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">
                                    Oct 24, 2023
                                </td>

                                <td class="px-6 py-5 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                        Live
                                    </span>
                                </td>

                                <td class="px-6 py-5 text-right">
                                    <button class="text-primary font-bold text-sm hover:underline">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>


                <!-- Mobile Card Layout -->
                <div class="md:hidden divide-y divide-primary/10">

                    <div class="p-5 flex flex-col gap-3">

                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                Hero Tagline
                            </p>
                            <p class="text-xs text-slate-400">
                                Homepage - Header Section
                            </p>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Updated</span>
                            <span class="text-slate-700 dark:text-slate-300">
                                Oct 24, 2023
                            </span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                Live
                            </span>

                            <button class="text-primary font-bold text-sm">
                                Edit
                            </button>
                        </div>

                    </div>
                    <div class="p-5 flex flex-col gap-3">

                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                Hero Tagline
                            </p>
                            <p class="text-xs text-slate-400">
                                Homepage - Header Section
                            </p>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Updated</span>
                            <span class="text-slate-700 dark:text-slate-300">
                                Oct 24, 2023
                            </span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                Live
                            </span>

                            <button class="text-primary font-bold text-sm">
                                Edit
                            </button>
                        </div>

                    </div>
                    <div class="p-5 flex flex-col gap-3">

                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                Hero Tagline
                            </p>
                            <p class="text-xs text-slate-400">
                                Homepage - Header Section
                            </p>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Updated</span>
                            <span class="text-slate-700 dark:text-slate-300">
                                Oct 24, 2023
                            </span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                Live
                            </span>

                            <button class="text-primary font-bold text-sm">
                                Edit
                            </button>
                        </div>

                    </div>
                    <div class="p-5 flex flex-col gap-3">

                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                Hero Tagline
                            </p>
                            <p class="text-xs text-slate-400">
                                Homepage - Header Section
                            </p>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Updated</span>
                            <span class="text-slate-700 dark:text-slate-300">
                                Oct 24, 2023
                            </span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                Live
                            </span>

                            <button class="text-primary font-bold text-sm">
                                Edit
                            </button>
                        </div>

                    </div>
                    <div class="p-5 flex flex-col gap-3">

                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                Hero Tagline
                            </p>
                            <p class="text-xs text-slate-400">
                                Homepage - Header Section
                            </p>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Updated</span>
                            <span class="text-slate-700 dark:text-slate-300">
                                Oct 24, 2023
                            </span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">
                                Live
                            </span>

                            <button class="text-primary font-bold text-sm">
                                Edit
                            </button>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection