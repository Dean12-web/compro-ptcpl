@extends('admin.layouts.app')

@section('page-header')
    <h2 class="text-lg font-bold text-primary">Dashboard</h2>
@endsection
@section('content')
    <div class="flex-1 overflow-y-auto p-8 bg-background-light dark:bg-background-dark">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <span class="text-green-600 text-xs font-bold flex items-center bg-green-50 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>+5%
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium mb-1">Total Products</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">124</h3>
            </div>
            <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <span class="text-green-600 text-xs font-bold flex items-center bg-green-50 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>+12%
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium mb-1">New Inquiries</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">18</h3>
            </div>
            <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">public</span>
                    </div>
                    <span class="text-slate-400 text-xs font-bold flex items-center bg-slate-50 px-2 py-1 rounded-full">
                        0%
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium mb-1">Active Export Countries</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">24</h3>
            </div>
            <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">image</span>
                    </div>
                    <span class="text-green-600 text-xs font-bold flex items-center bg-green-50 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>+2%
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium mb-1">Gallery Items</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">56</h3>
            </div>
        </div>
        <!-- Recent Inquiries Table -->
        <div class="bg-white dark:bg-zinc-900 rounded-xl border border-primary/10 shadow-sm overflow-hidden">

            <!-- Header -->
            <div
                class="px-6 py-4 border-b border-primary/10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <h3 class="font-bold text-lg">Recent Inquiry Messages</h3>

                <button class="text-primary text-sm font-bold hover:underline self-start sm:self-auto">
                    View all inquiries
                </button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left min-w-[600px]">
                    <thead class="bg-background-light dark:bg-zinc-800/50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Sender
                            </th>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Subject
                            </th>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">
                                Status
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-primary/5">

                        <!-- ROW -->
                        <tr class="hover:bg-primary/5 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded-full bg-secondary/20 flex items-center justify-center text-primary font-bold text-xs uppercase">
                                        JD
                                    </div>

                                    <div class="min-w-0">
                                        <p class="text-sm font-semibold text-slate-900 dark:text-white truncate">
                                            John Doe
                                        </p>
                                        <p class="text-xs text-slate-500 truncate">
                                            j.doe@example.com
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 max-w-[260px]">
                                <p class="text-sm text-slate-700 dark:text-slate-300 truncate">
                                    Product Inquiry: Industrial Valves
                                </p>
                                <p class="text-xs text-slate-400 truncate">
                                    Interested in bulk pricing for the new valve series...
                                </p>
                            </td>

                            <td class="px-6 py-4 text-sm text-slate-500 whitespace-nowrap">
                                Oct 24, 2023
                            </td>

                            <td class="px-6 py-4 text-right whitespace-nowrap">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700">
                                    New
                                </span>
                            </td>
                        </tr>
                        <!-- rows lain tetap sama -->
                    </tbody>
                </table>
            </div>
            <!-- Footer -->
            <div
                class="px-6 py-4 bg-background-light dark:bg-zinc-800/20 border-t border-primary/5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                <p class="text-sm text-slate-500 font-medium text-center sm:text-left">
                    Showing 4 of 18 messages
                </p>

                <div class="flex gap-2 justify-center sm:justify-end">
                    <button
                        class="px-3 py-1 bg-white dark:bg-zinc-900 border border-primary/10 rounded-lg text-sm disabled:opacity-50">
                        Previous
                    </button>

                    <button class="px-3 py-1 bg-white dark:bg-zinc-900 border border-primary/10 rounded-lg text-sm">
                        Next
                    </button>
                </div>
            </div>
        </div>
        <!-- Footer Summary -->
        <div class="mt-8 flex flex-col md:flex-row gap-6">
            <div class="flex-1 bg-gradient-to-br from-primary to-secondary p-6 rounded-xl text-white">
                <h4 class="font-bold mb-2">System Status</h4>
                <div class="flex items-center gap-2 text-sm text-white/80">
                    <span class="size-2 bg-green-400 rounded-full animate-pulse"></span>
                    All export portals operational
                </div>
                <div class="mt-4 text-xs bg-white/10 p-3 rounded-lg backdrop-blur-sm">
                    Last content update sync: 10 minutes ago
                </div>
            </div>
            <div
                class="flex-1 bg-white dark:bg-zinc-900 border border-primary/10 p-6 rounded-xl flex items-center justify-between">
                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white">Export Reach</h4>
                    <p class="text-sm text-slate-500">Your products are now available in 24 countries across 4
                        continents.</p>
                </div>
                <div
                    class="size-16 border-4 border-secondary/20 border-t-secondary rounded-full flex items-center justify-center font-bold text-secondary">
                    75%
                </div>
            </div>
        </div>
    </div>
@endsection