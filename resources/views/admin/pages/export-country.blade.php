@extends('admin.layouts.app')
@section('title', 'Export country')
@section('page-header')
    <h2 class="text-lg font-bold text-primary">Export Country</h2>
@endsection
@section('content')
    <div class="flex-1 overflow-y-auto p-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Export Country
                    Management</h1>
                <p class="text-slate-500 mt-1">Configure shipping parameters and status for international
                    destination markets.</p>
            </div>
            <button
                class="flex items-center gap-2 bg-primary text-white px-6 py-2.5 rounded-lg font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-sm">add</span>
                <span>Add New Country</span>
            </button>
        </div>
        <!-- Filters and Search -->
        <div class="bg-white dark:bg-background-dark border border-primary/10 rounded-xl p-4 mb-6 shadow-sm">

            <div class="flex flex-col lg:flex-row gap-4">

                <!-- Search -->
                <div class="flex-1 relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                        search
                    </span>

                    <input type="text" placeholder="Search by country name or code..."
                        class="w-full pl-10 pr-4 py-2 border border-primary/10 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none bg-background-light/30 transition-all text-sm">
                </div>

                <!-- Filters -->
                <div class="flex flex-col sm:flex-row sm:flex-wrap gap-2 w-full lg:w-auto">

                    <!-- Region -->
                    <div class="relative w-full sm:w-auto">
                        <select
                            class="appearance-none w-full sm:w-auto pl-4 pr-10 py-2 border border-primary/10 rounded-lg bg-background-light/30 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20">
                            <option>All Regions</option>
                            <option>Southeast Asia</option>
                            <option>Europe</option>
                            <option>North America</option>
                            <option>Oceania</option>
                        </select>

                        <span
                            class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                            expand_more
                        </span>
                    </div>

                    <!-- Status -->
                    <div class="relative w-full sm:w-auto">
                        <select
                            class="appearance-none w-full sm:w-auto pl-4 pr-10 py-2 border border-primary/10 rounded-lg bg-background-light/30 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20">
                            <option>All Statuses</option>
                            <option>Active</option>
                            <option>Draft</option>
                            <option>Restricted</option>
                        </select>

                        <span
                            class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                            expand_more
                        </span>
                    </div>

                    <!-- Button -->
                    <button
                        class="flex items-center justify-center gap-2 px-4 py-2 border border-primary/20 text-primary font-bold rounded-lg hover:bg-primary/5 transition-all text-sm w-full sm:w-auto">
                        <span class="material-symbols-outlined text-sm">filter_list</span>
                        <span>Advanced Filters</span>
                    </button>

                </div>

            </div>

        </div>
        <!-- Countries Table -->
        <div class="bg-white dark:bg-background-dark border border-primary/10 rounded-xl shadow-sm overflow-hidden">

            <!-- Table Wrapper -->
            <div class="overflow-x-auto">

                <table class="w-full min-w-[760px] text-left border-collapse">

                    <thead>
                        <tr class="bg-primary/[0.03] border-b border-primary/10">
                            <th class="px-6 py-4 text-xs font-bold text-primary uppercase tracking-wider">Country Name</th>
                            <th class="px-6 py-4 text-xs font-bold text-primary uppercase tracking-wider">Region</th>
                            <th class="px-6 py-4 text-xs font-bold text-primary uppercase tracking-wider">Shipping Methods
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-primary uppercase tracking-wider">Avg. Lead Time
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-primary uppercase tracking-wider">Active Status</th>
                            <th class="px-6 py-4 text-xs font-bold text-primary uppercase tracking-wider text-right">Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-primary/5">

                        <!-- Row 1 -->
                        <tr class="hover:bg-primary/[0.01] transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded overflow-hidden bg-slate-100 flex items-center justify-center">
                                        <img class="w-full h-full object-cover" data-alt="Flag icon for Japan"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNhnf5LacLYI3RqlgG37uL2Tfc38C1fSc8X5anzuzi7yAAOa-aXG2XTHoM9uKq50J6LtGWbrzg50IlUzIesXmrhH4SQ4MLSNWMwDpM3VyT3Tmux3kKG7mcxtTO-7aF8RFLumtQ2Bo5MODA8FB9NNTHoYFMvzK7C-fRystTSuzc9tsBARxTkYrxTnuBVAAYcBxsqL-5MM8oW-xqWdxmNPiwAtjwKw1QLckwSgtDy-B7xdL_1dKxqGFhRKDugQDrrKe8JX9JjTWggXCR" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-white">Japan</p>
                                        <p class="text-xs text-slate-400">JP / JPY</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm text-slate-600 dark:text-slate-400">East Asia</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-1">
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">AIR</span>
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">SEA</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                5-7 Days
                            </td>
                            <td class="px-6 py-4">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input checked="" class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-primary/[0.01] transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded overflow-hidden bg-slate-100 flex items-center justify-center">
                                        <img class="w-full h-full object-cover" data-alt="Flag icon for Singapore"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI8ObNrnRTtATOC4VOXBvGU2QrHcGvwGR09EbJ5qO6r3XYn5mTxlmxlm0u5B2XdMbu1oepalHsVyAnBkd9tlvtIPBmksGFs97_L7rpCO-obB67V7cL_Vq2CSXDMkQAldvUrOyqqxvOkRQSu2xRjgd_VnpB-k6ZIh1b6fqGgtSx9GLeGlYqwirdCo09VcQJMYDOjs5p3xeOuVrMFAxBM6Cn5_5Zesmnr1Jwsm_5EanKYk-KYsJ3sOloOPNNL9SzdnG6xLhn2s80FdBw" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-white">Singapore</p>
                                        <p class="text-xs text-slate-400">SG / SGD</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Southeast Asia</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-1">
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">AIR</span>
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">LAND</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                2-3 Days
                            </td>
                            <td class="px-6 py-4">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input checked="" class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-primary/[0.01] transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded overflow-hidden bg-slate-100 flex items-center justify-center">
                                        <img class="w-full h-full object-cover" data-alt="Flag icon for Germany"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHLM1fcUAHchsZaiHV34HiMrUiblUZfdlkz0Mu5kJXk6wLvwSnFDQeK99pHV4-15tgUyoQ7wOECdT9SN4o4Qvl9gqanIhbNC4djhowiSYxVXtKvctVAIEsgIbATpuh74kZ252kLVOE_BPLqBpb6iNiFgSVxpI-Ei1Di7hwyBj5EO8HXRfF4tWScwhwK9_8XUtTNM00Qmyjd9bna3Rj4uBK5-jqIvsQogPXQ8djgMMKUGEz4jtm2YCwXCiaEN-WKp0cPT_Sxmfi1q-9" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-white">Germany</p>
                                        <p class="text-xs text-slate-400">DE / EUR</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Europe</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-1">
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">AIR</span>
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">SEA</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                10-14 Days
                            </td>
                            <td class="px-6 py-4">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-primary/[0.01] transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded overflow-hidden bg-slate-100 flex items-center justify-center">
                                        <img class="w-full h-full object-cover" data-alt="Flag icon for United States"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNIrdjNkO_JToeqyId73ZBbzIgI53oRSidyBWQtpmg58fkX4qZ7q7u1gQWHnuwB8HDjYh8Jr3MYvHQxOWKPDc0Nl7WMftc8amY7HFB2yAAT9VRlCddyPRYprF8T3nHWZpe33CHToBq2KAOZq-T4lDCft4gK5B02z57il0RMKKZv-1kzMPJPpGp2F45sjDWfCKEuPNuOjV8ilzCytxmDwBdil9FwXZjANCcBIQlqudRhDtxXmdVivq7AZUwUvafuHKeOfx09l4J6Wpb" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-white">United States</p>
                                        <p class="text-xs text-slate-400">US / USD</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm text-slate-600 dark:text-slate-400">North America</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-1">
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">AIR</span>
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded">SEA</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                12-16 Days
                            </td>
                            <td class="px-6 py-4">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input checked="" class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </label>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <!-- Pagination -->
            <div
                class="px-6 py-4 border-t border-primary/10 bg-background-light/30 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                <p class="text-sm text-slate-500 text-center sm:text-left">
                    Showing <span class="font-bold text-slate-900">1</span>
                    to <span class="font-bold text-slate-900">4</span>
                    of <span class="font-bold text-slate-900">24</span> results
                </p>

                <div class="flex items-center justify-center sm:justify-end gap-1 flex-wrap">

                    <button
                        class="size-8 flex items-center justify-center rounded border border-primary/10 hover:bg-primary/5 text-slate-400 transition-colors">
                        <span class="material-symbols-outlined text-sm">chevron_left</span>
                    </button>

                    <button class="size-8 flex items-center justify-center rounded bg-primary text-white font-bold text-sm">
                        1
                    </button>

                    <button
                        class="size-8 flex items-center justify-center rounded hover:bg-primary/5 text-slate-600 font-medium text-sm">
                        2
                    </button>

                    <button
                        class="size-8 flex items-center justify-center rounded hover:bg-primary/5 text-slate-600 font-medium text-sm">
                        3
                    </button>

                    <button
                        class="size-8 flex items-center justify-center rounded border border-primary/10 hover:bg-primary/5 text-slate-400 transition-colors">
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>

                </div>

            </div>

        </div>
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div
                class="bg-white dark:bg-background-dark p-5 rounded-xl border border-primary/10 shadow-sm flex items-center gap-4">
                <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-3xl">public</span>
                </div>
                <div>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Total Active Countries
                    </p>
                    <p class="text-2xl font-black text-slate-900 dark:text-white leading-none">18</p>
                </div>
            </div>
            <div
                class="bg-white dark:bg-background-dark p-5 rounded-xl border border-primary/10 shadow-sm flex items-center gap-4">
                <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-3xl">timer</span>
                </div>
                <div>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Avg. Lead Time</p>
                    <p class="text-2xl font-black text-slate-900 dark:text-white leading-none">8.2 Days</p>
                </div>
            </div>
            <div
                class="bg-white dark:bg-background-dark p-5 rounded-xl border border-primary/10 shadow-sm flex items-center gap-4">
                <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-3xl">map</span>
                </div>
                <div>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Top Region</p>
                    <p class="text-2xl font-black text-slate-900 dark:text-white leading-none">SEA</p>
                </div>
            </div>
        </div>
    </div>
@endsection