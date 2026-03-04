@extends('admin.layouts.app')
@section('title','Products')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Products</h2>
@endsection
@section('content')
            <div class="p-8 max-w-7xl mx-auto w-full space-y-6">
                <!-- Page Title & Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-primary/10 shadow-sm">
                        <p class="text-sm text-slate-500 font-medium">Total Products</p>
                        <h3 class="text-3xl font-black mt-1">124</h3>
                        <div class="mt-2 flex items-center gap-1 text-xs text-primary font-bold">
                            <span class="material-symbols-outlined !text-sm">trending_up</span>
                            +4 this month
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-primary/10 shadow-sm">
                        <p class="text-sm text-slate-500 font-medium">Active Trays</p>
                        <h3 class="text-3xl font-black mt-1 text-primary">118</h3>
                        <div class="mt-2 flex items-center gap-1 text-xs text-slate-400">
                            95% of total catalog
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-primary/10 shadow-sm">
                        <p class="text-sm text-slate-500 font-medium">Out of Stock</p>
                        <h3 class="text-3xl font-black mt-1 text-red-500">2</h3>
                        <div class="mt-2 flex items-center gap-1 text-xs text-red-400 font-medium">
                            Requires attention
                        </div>
                    </div>
                </div>
                <!-- Filters and Search -->
                <div
                    class="flex flex-col md:flex-row gap-4 items-center justify-between bg-white dark:bg-slate-800/50 p-4 rounded-xl border border-primary/10 shadow-sm">
                    <div class="relative w-full md:w-96">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2 bg-background-light dark:bg-slate-900 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-sm transition-all"
                            placeholder="Search product name or SKU..." type="text" />
                    </div>
                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <div class="flex items-center gap-2 text-sm text-slate-500">
                            <span class="material-symbols-outlined !text-lg">filter_list</span>
                            Filter:
                        </div>
                        <select
                            class="bg-background-light dark:bg-slate-900 border border-primary/10 rounded-lg py-1.5 px-3 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none min-w-[120px]">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        <select
                            class="bg-background-light dark:bg-slate-900 border border-primary/10 rounded-lg py-1.5 px-3 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none min-w-[120px]">
                            <option>All Material</option>
                            <option>Pulp Paper</option>
                            <option>Plastic</option>
                            <option>Composite</option>
                        </select>
                    </div>
                </div>
                <!-- Products Table -->
                <div
                    class="bg-white dark:bg-slate-800/50 rounded-xl border border-primary/10 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-primary/5 border-b border-primary/10">
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">
                                        Product Name</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">SKU
                                    </th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">
                                        Material</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 text-center">
                                        Status</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-primary/10">
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="size-10 rounded bg-slate-100 dark:bg-slate-900 flex items-center justify-center">
                                                <span class="material-symbols-outlined text-primary/60">egg</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold">Standard Egg Tray 30s</p>
                                                <p class="text-xs text-slate-500">Premium Grade Pulp</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <code
                                            class="text-xs bg-slate-100 dark:bg-slate-900 px-2 py-1 rounded text-primary font-mono">ET-STD-30</code>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-xs font-medium">Paper Pulp</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input checked="" class="sr-only peer" type="checkbox" />
                                                <div
                                                    class="w-9 h-5 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary">
                                                </div>
                                            </label>
                                            <span class="text-[10px] font-bold uppercase text-primary">Active</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined !text-lg">edit</span>
                                            </button>
                                            <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                                <span class="material-symbols-outlined !text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="size-10 rounded bg-slate-100 dark:bg-slate-900 flex items-center justify-center">
                                                <span class="material-symbols-outlined text-primary/60">egg</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold">Jumbo Egg Tray 30s</p>
                                                <p class="text-xs text-slate-500">Heavy Duty Export Grade</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <code
                                            class="text-xs bg-slate-100 dark:bg-slate-900 px-2 py-1 rounded text-primary font-mono">ET-JMB-30</code>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-xs font-medium">Paper Pulp</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input checked="" class="sr-only peer" type="checkbox" />
                                                <div
                                                    class="w-9 h-5 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary">
                                                </div>
                                            </label>
                                            <span class="text-[10px] font-bold uppercase text-primary">Active</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined !text-lg">edit</span>
                                            </button>
                                            <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                                <span class="material-symbols-outlined !text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="size-10 rounded bg-slate-100 dark:bg-slate-900 flex items-center justify-center">
                                                <span class="material-symbols-outlined text-primary/60">category</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold">Plastic Egg Case 10s</p>
                                                <p class="text-xs text-slate-500">Retail Transparent Pack</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <code
                                            class="text-xs bg-slate-100 dark:bg-slate-900 px-2 py-1 rounded text-primary font-mono">EC-PLS-10</code>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-xs font-medium">PET Plastic</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input class="sr-only peer" type="checkbox" />
                                                <div
                                                    class="w-9 h-5 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary">
                                                </div>
                                            </label>
                                            <span class="text-[10px] font-bold uppercase text-slate-400">Inactive</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined !text-lg">edit</span>
                                            </button>
                                            <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                                <span class="material-symbols-outlined !text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="size-10 rounded bg-slate-100 dark:bg-slate-900 flex items-center justify-center">
                                                <span class="material-symbols-outlined text-primary/60">egg</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold">Paper Pulp Tray 12s</p>
                                                <p class="text-xs text-slate-500">Biodegradable Eco-Pack</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <code
                                            class="text-xs bg-slate-100 dark:bg-slate-900 px-2 py-1 rounded text-primary font-mono">ET-PULP-12</code>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-xs font-medium">Recycled Pulp</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input checked="" class="sr-only peer" type="checkbox" />
                                                <div
                                                    class="w-9 h-5 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary">
                                                </div>
                                            </label>
                                            <span class="text-[10px] font-bold uppercase text-primary">Active</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined !text-lg">edit</span>
                                            </button>
                                            <button class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                                <span class="material-symbols-outlined !text-lg">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="px-6 py-4 flex items-center justify-between border-t border-primary/10">
                        <p class="text-xs text-slate-500">Showing 1 to 4 of 124 products</p>
                        <div class="flex items-center gap-1">
                            <button
                                class="px-2 py-1 rounded border border-primary/10 text-slate-400 hover:bg-primary/5 transition-colors">
                                <span class="material-symbols-outlined !text-lg">chevron_left</span>
                            </button>
                            <button class="px-3 py-1 rounded bg-primary text-white text-xs font-bold">1</button>
                            <button
                                class="px-3 py-1 rounded border border-primary/10 text-slate-600 hover:bg-primary/5 transition-colors text-xs font-medium">2</button>
                            <button
                                class="px-3 py-1 rounded border border-primary/10 text-slate-600 hover:bg-primary/5 transition-colors text-xs font-medium">3</button>
                            <span class="text-slate-400 px-1">...</span>
                            <button
                                class="px-3 py-1 rounded border border-primary/10 text-slate-600 hover:bg-primary/5 transition-colors text-xs font-medium">31</button>
                            <button
                                class="px-2 py-1 rounded border border-primary/10 text-slate-400 hover:bg-primary/5 transition-colors">
                                <span class="material-symbols-outlined !text-lg">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
@endsection