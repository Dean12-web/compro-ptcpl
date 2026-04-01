<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Product;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }

    public function stats()
    {
        $todayVisitors = Visitor::where('date', today())->count();
        $monthVisitors = Visitor::whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->count();

        $totalVisitors = Visitor::count();

        $product_active = Product::where('is_active', true)->count();

        $new_inquiry = Inquiry::where('is_read', false)->count();

        $product_this_month = Product::whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->where('is_active', true)->count();

        $inquiry_this_month = Inquiry::whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->where('is_read', false)->count();

        $todayLabel = Carbon::today()->locale('id')->translatedFormat('d F Y');
        $monthLabel = Carbon::now()->locale('id')->translatedFormat('F Y');

        return response()->json([
            'product_active' => $product_active,
            'new_inquiry'    => $new_inquiry,
            'product_this_month' => $product_this_month,
            'inquiry_this_month' => $inquiry_this_month,
            'today_visitor' => $todayVisitors,
            'today_label' => $todayLabel,
            'monthly_visitor' => $monthVisitors,
            'month_label' => $monthLabel,
            'total_visitor' => $totalVisitors,
        ]);
    }

    public function inquiry_view()
    {
        $query = Inquiry::query();

        $query->where("is_read", false);

        $inquiries = $query->paginate(5);

        return response()->json([
            'rows' => $inquiries->map(function ($inquiry) {
                return [
                    'id' => $inquiry->id,
                    'pengirim' => ' <div class="min-w-0">
                            <p class="text-sm font-semibold text-slate-900 dark:text-white truncate">'
                        . e($inquiry->name) . '
                            </p>
                            <p class="text-xs text-slate-500 truncate">'
                        . e($inquiry->email) . '
                            </p>
                        </div>
                    </div>',
                    'pesan' => $inquiry->message ? e(Str::limit($inquiry->message, 30)) : '<span class="text-slate-400">-</span>',
                    'negara' => $inquiry->country ? e($inquiry->country) : '<span class="text-slate-400">-</span>',
                    'status' => $inquiry->is_read ?  '<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
            Sudah dibaca
       </span>' : '<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700">
            Baru
       </span>',
                    'tanggal' => Carbon::parse($inquiry->created_at)->locale('id')->translatedFormat('d M Y')

                ];
            }),
            'pagination' => [
                'current_page' => $inquiries->currentPage(),
                'last_page' => $inquiries->lastPage(),
                'total' => $inquiries->total(),
                'from' => $inquiries->firstItem(),
                'to' => $inquiries->lastItem()
            ]
        ]);
    }
}
