@extends('admin.layouts.app')
@section('content')
    <header class="flex justify-between items-end mb-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight">Dashboard Overview
            </h2>
            <p class="text-slate-500 mt-1">Monitoring PT CPL's industrial performance and
                outreach.</p>
        </div>
        <div class="flex gap-3">
            <button
                class="flex items-center gap-2 px-4 py-2 border border-primary/20 rounded-lg text-sm font-medium hover:bg-primary/5 transition-colors">
                <span class="material-symbols-outlined text-sm">calendar_today</span>
                Last 30 Days
            </button>
            <button
                class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
                <span class="material-symbols-outlined text-sm">download</span>
                Export Report
            </button>
        </div>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl border border-primary/10 shadow-sm">
            <div class="flex justify-between items-start mb-4">
                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                    <span class="material-symbols-outlined">category</span>
                </div>
                <span class="text-emerald-600 text-xs font-bold flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">trending_up</span> +4%
                </span>
            </div>
            <p class="text-slate-500 text-sm font-medium">Total Products</p>
            <p class="text-2xl font-bold text-slate-900 mt-1">128</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-primary/10 shadow-sm">
            <div class="flex justify-between items-start mb-4">
                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                    <span class="material-symbols-outlined">mark_email_unread</span>
                </div>
                <span class="text-emerald-600 text-xs font-bold flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">trending_up</span> +12%
                </span>
            </div>
            <p class="text-slate-500 text-sm font-medium">New Inquiries</p>
            <p class="text-2xl font-bold text-slate-900 mt-1">14</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-primary/10 shadow-sm">
            <div class="flex justify-between items-start mb-4">
                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                    <span class="material-symbols-outlined">language</span>
                </div>
                <span class="text-slate-400 text-xs font-bold flex items-center gap-1">
                    0%
                </span>
            </div>
            <p class="text-slate-500 text-sm font-medium">Active Export Countries</p>
            <p class="text-2xl font-bold text-slate-900 mt-1">32</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-primary/10 shadow-sm">
            <div class="flex justify-between items-start mb-4">
                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                    <span class="material-symbols-outlined">image</span>
                </div>
                <span class="text-emerald-600 text-xs font-bold flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">trending_up</span> +2%
                </span>
            </div>
            <p class="text-slate-500 text-sm font-medium">Gallery Items</p>
            <p class="text-2xl font-bold text-slate-900 mt-1">56</p>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white p-6 rounded-xl border border-primary/10 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-lg font-bold">Inquiry Volume (Last 7 Days)</h3>
                    <p class="text-sm text-slate-500">Weekly performance: <span
                            class="text-emerald-600 font-semibold">+8%</span></p>
                </div>
                <div class="text-right">
                    <p class="text-3xl font-black text-primary">84</p>
                    <p class="text-xs text-slate-400 uppercase tracking-tighter">Total Messages</p>
                </div>
            </div>
            <div class="flex items-end justify-between h-48 gap-2 pt-4">
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-primary/10 rounded-t-sm relative group cursor-pointer" style="height: 40%;">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400">MON</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-primary/10 rounded-t-sm relative group cursor-pointer" style="height: 65%;">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400">TUE</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-primary rounded-t-sm relative group cursor-pointer" style="height: 90%;">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                    <span class="text-[10px] font-bold text-slate-900">WED</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-primary/10 rounded-t-sm relative group cursor-pointer" style="height: 55%;">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400">THU</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-primary/10 rounded-t-sm relative group cursor-pointer" style="height: 75%;">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400">FRI</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-primary/10 rounded-t-sm relative group cursor-pointer" style="height: 35%;">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400">SAT</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-3">
                    <div class="w-full bg-primary/10 rounded-t-sm relative group cursor-pointer" style="height: 25%;">
                        <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400">SUN</span>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl border border-primary/10 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold">Top Destinations</h3>
                <button class="text-primary text-sm font-semibold hover:underline">View All</button>
            </div>
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="size-8 rounded bg-slate-100 flex items-center justify-center text-lg">🇺🇸</div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold">United States</p>
                        <div class="w-full bg-slate-100 h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full" style="width: 85%;"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-slate-500">85%</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="size-8 rounded bg-slate-100 flex items-center justify-center text-lg">🇩🇪</div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold">Germany</p>
                        <div class="w-full bg-slate-100 h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full" style="width: 62%;"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-slate-500">62%</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="size-8 rounded bg-slate-100 flex items-center justify-center text-lg">🇯🇵</div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold">Japan</p>
                        <div class="w-full bg-slate-100 h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full" style="width: 48%;"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-slate-500">48%</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="size-8 rounded bg-slate-100 flex items-center justify-center text-lg">🇸🇬</div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold">Singapore</p>
                        <div class="w-full bg-slate-100 h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full" style="width: 35%;"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-slate-500">35%</span>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-8">
        <div class="flex justify-between items-center mb-5 px-1">
            <h3 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                Recent Inquiry Messages
                <span class="bg-primary text-white text-[10px] px-2 py-0.5 rounded-full">New</span>
            </h3>
            <button class="text-sm font-semibold text-primary flex items-center gap-1 hover:gap-2 transition-all">
                Go to Inquiries <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
        </div>
        <div class="bg-white rounded-xl border border-primary/10 overflow-hidden shadow-sm">
            <table class="w-full text-left">
                <thead>
                    <tr
                        class="bg-slate-50 border-b border-primary/10 text-xs font-bold uppercase text-slate-500">
                        <th class="px-6 py-4">Sender</th>
                        <th class="px-6 py-4">Subject</th>
                        <th class="px-6 py-4">Message Preview</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-primary/5">
                    <tr class="hover:bg-primary/5 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-secondary/10 flex items-center justify-center text-primary font-bold text-xs">
                                    JD</div>
                                <div>
                                    <p class="text-sm font-semibold">John Doe</p>
                                    <p class="text-xs text-slate-500">john@manufacturing.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded bg-secondary/20 text-primary text-[10px] font-bold">Bulk
                                Order</span>
                        </td>
                        <td class="px-6 py-4 max-w-xs">
                            <p class="text-sm text-slate-600 truncate">Interested in
                                ordering 500 units of the Industrial Grade Sealant...</p>
                        </td>
                        <td class="px-6 py-4 text-xs font-medium text-slate-500">2h ago</td>
                        <td class="px-6 py-4">
                            <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-primary/5 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-secondary/10 flex items-center justify-center text-primary font-bold text-xs">
                                    SK</div>
                                <div>
                                    <p class="text-sm font-semibold">Sarah Koenig</p>
                                    <p class="text-xs text-slate-500">sarah@globaltrade.de</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded bg-primary/20 text-primary text-[10px] font-bold">Export
                                Inquiry</span>
                        </td>
                        <td class="px-6 py-4 max-w-xs">
                            <p class="text-sm text-slate-600 truncate">We are looking for a
                                reliable partner for logistics in the EU region...</p>
                        </td>
                        <td class="px-6 py-4 text-xs font-medium text-slate-500">5h ago</td>
                        <td class="px-6 py-4">
                            <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-primary/5 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-secondary/10 flex items-center justify-center text-primary font-bold text-xs">
                                    MT</div>
                                <div>
                                    <p class="text-sm font-semibold">Michael Tanaka</p>
                                    <p class="text-xs text-slate-500">m.tanaka@heavyind.jp</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded bg-slate-100 text-slate-500 text-[10px] font-bold">General
                                Question</span>
                        </td>
                        <td class="px-6 py-4 max-w-xs">
                            <p class="text-sm text-slate-600 truncate">Could you provide the
                                MSDS documentation for the latest batch?</p>
                        </td>
                        <td class="px-6 py-4 text-xs font-medium text-slate-500">Yesterday</td>
                        <td class="px-6 py-4">
                            <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection