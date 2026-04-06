@extends('admin.layouts.app')

@section('page-header')
    <h2 class="text-lg font-bold text-primary">Dashboard</h2>
@endsection
@section('content')
    <div class="flex-1 overflow-y-auto p-8 bg-background-light dark:bg-background-dark" x-data="dashboardTable()">
        <!-- Visitor Chart -->
        <div class="grid grid-cols-1 gap-4 mb-6">
            <div class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-primary/10 shadow-sm">

                <div class="flex items-center justify-between mb-3">
                    <div class="size-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px]">insights</span>
                    </div>
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400">
                        Perbandingan pengunjung
                    </p>
                </div>

                <div class="w-full">
                    <canvas id="visitor-chart" class="w-full h-[180px]"></canvas>
                </div>

                <div class="grid grid-cols-3 gap-2 mt-4 text-center">
                    <div>
                        <p class="text-[10px] text-slate-500 uppercase">Hari Ini</p>
                        <p class="text-lg font-bold" x-text="stats.today_visitor"></p>
                        <p class="text-[10px] text-slate-400" x-text="stats.today_label"></p>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-500 uppercase">Bulan Ini</p>
                        <p class="text-lg font-bold" x-text="stats.monthly_visitor"></p>
                        <p class="text-[10px] text-slate-400" x-text="stats.month_label"></p>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-500 uppercase">Total</p>
                        <p class="text-lg font-bold" x-text="stats.total_visitor"></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <span class="text-green-600 text-xs font-bold flex items-center bg-green-50 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span><span
                            x-text="'+' + stats.product_this_month + '%' "></span>
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium mb-1">Total Produk Aktif</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white" x-text="stats.product_active"></h3>
            </div>
            <div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <span class="text-green-600 text-xs font-bold flex items-center bg-green-50 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span><span
                            x-text="'+' + stats.inquiry_this_month + '%' "></span>
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium mb-1">Pertanyaan Terbaru</p>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white" x-text="stats.new_inquiry"></h3>
            </div>

        </div>
        <!-- Recent Inquiries Table -->
        <div class="bg-white dark:bg-zinc-900 rounded-xl border border-primary/10 shadow-sm overflow-hidden">

            <!-- Header -->
            <div
                class="px-6 py-4 border-b border-primary/10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <h3 class="font-bold text-lg">Pesan Terbaru</h3>

                <a href="{{ route('cpl.inquiry-view') }}"
                    class="text-primary text-sm font-bold hover:underline self-start sm:self-auto">
                    Lihat semua pesan
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left min-w-[600px]">
                    <thead class="bg-background-light dark:bg-zinc-800/50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Pengirim
                            </th>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Pesan
                            </th>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                Tanggal
                            </th>

                        </tr>
                    </thead>

                    <tbody class="divide-y divide-primary/5">

                        <tr x-show="loading">
                            <td colspan="4" class="text-center py-6 text-slate-400">Loading...</td>
                        </tr>

                        <tr x-show="!loading && rows.length === 0">
                            <td colspan="4" class="text-center py-6 text-slate-400">
                                Tidak ada data
                            </td>
                        </tr>

                        <template x-for="row in rows" :key="row.id">
                            <tr class="hover:bg-primary/5 transition-colors">
                                <td class="px-6 py-4">
                                    <div x-html="row.pengirim"></div>
                                </td>
                                <td class="px-6 py-4 max-w-[260px]">
                                    <p class="text-sm text-slate-700 dark:text-slate-300 truncate" x-text="row.pesan"></p>
                                    <p class="text-xs text-slate-400 truncate" x-text="row.negara"></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div x-html="row.status"></div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500 whitespace-nowrap" x-text="row.tanggal">
                                </td>

                            </tr>

                        </template>
                        <!-- rows lain tetap sama -->
                    </tbody>
                </table>
            </div>
            <!-- Footer -->
            <div
                class="px-6 py-4 bg-background-light dark:bg-zinc-800/20 border-t border-primary/5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                <p class="text-sm text-slate-500 font-medium text-center sm:text-left">
                    Menampilkan
                    <span x-text="pagination.from ?? 0"></span>
                    dari
                    <span x-text="pagination.total ?? 0"></span>
                    Pesan
                </p>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function dashboardTable() {
        return {
            rows: [],
            pagination: {},
            visitorChart: null,

            stats: {
                product_active: 0,
                new_inquiry: 0,
                product_this_month: 0,
                inquiry_this_month: 0,
                today_visitor: 0,
                monthly_visitor: 0,
                total_visitor: 0,
                today_label: '',
                month_label: '',
                visitor_trend: {
                    labels: [],
                    data: []
                },
            },

            init() {
                this.load()
                this.loadStats()
            },

            async load() {
                this.loading = true

                let params = new URLSearchParams({
                    page: this.page
                })

                const res = await fetch(`/cpl-admin/dashboard-inquiry-view?${params}`)
                const data = await res.json()

                this.rows = data.rows
                this.pagination = data.pagination

                this.loading = false
            },

            async loadStats() {
                const res = await fetch('/cpl-admin/dashboard-stats')
                const data = await res.json()

                this.stats = data
                this.$nextTick(() => {
                    this.updateVisitorChart()
                })
            },

            updateVisitorChart() {
                const chartNode = document.getElementById('visitor-chart')
                if (!chartNode || !this.stats.visitor_trend) return

                const primaryColor = '#0284c7'
                const labels = this.stats.visitor_trend.labels ?? []
                const data = this.stats.visitor_trend.data ?? []

                if (this.visitorChart) {
                    this.visitorChart.data.labels = labels
                    this.visitorChart.data.datasets[0].data = data
                    this.visitorChart.update()
                    return
                }

                this.visitorChart = new Chart(chartNode, {
                    type: 'line',
                    data: {
                        labels,
                        datasets: [{
                            label: 'Pengunjung',
                            data,
                            borderColor: primaryColor,
                            backgroundColor: 'rgba(2, 132, 199, 0.15)',
                            pointBackgroundColor: '#fff',
                            pointBorderColor: primaryColor,
                            pointHoverRadius: 6,
                            pointRadius: 4,
                            tension: 0.35,
                            fill: true
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    precision: 0
                                },
                                grid: {
                                    color: 'rgba(15, 23, 42, 0.08)'
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                mode: 'index',
                                intersect: false
                            }
                        }
                    }
                })
            },

            changePage(page) {
                if (page < 1) return
                this.page = page
                this.load()
            }
        }
    }
</script>