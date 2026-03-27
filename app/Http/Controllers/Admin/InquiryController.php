<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class InquiryController extends Controller
{
    public function index()
    {
        $columns = [
            [
                'key' => 'name',
                'label' => 'Pengirim',
                'sortable' => true
            ],
            [
                'key' => 'message',
                'label' => 'Pesan'
            ],
            [
                'key' => 'country',
                'label' => 'Negara'
            ],
            [
                'key' => 'is_read',
                'label' => 'Status'
            ],
            [
                'key' => 'created_at',
                'label' => 'Tanggal'
            ],
            [
                'key' => 'action',
                'label' => 'Aksi'
            ]
        ];

        $rows = [];
        return view('admin.pages.inquiries.index', compact('columns', 'rows'));
    }
    /**
     * Show the form for view a new resource.
     */
    public function view(Request $request)
    {
        $query = Inquiry::query();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $query->where(function ($builder) use ($searchTerm) {
                $builder->where('name', 'like', $searchTerm)
                    ->orWhere('company', 'like', $searchTerm)
                    ->orWhere('country', 'like', $searchTerm)
                    ->orWhere('email', 'like', $searchTerm);
            });
        }

        $filter = $request->get('filter', 'all');

        if ($filter === 'read') {
            $query->where('is_read', true);
        } elseif ($filter === 'unread' || $filter === 'new') {
            $query->where('is_read', false);
        }

        $allowedSorts = ['name', 'company', 'country', 'email', 'created_at'];
        $sort = $request->get('sort', 'created_at');
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'created_at';
        }

        $direction = $request->get('direction', 'desc');
        if (!in_array($direction, ['asc', 'desc'], true)) {
            $direction = 'desc';
        }

        $query->orderBy($sort, $direction);

        $inquiries = $query->paginate(10);

        return response()->json([
            'rows' => $inquiries->map(function ($inquiry) {
                $showUrl = e(route('inquiries.show', $inquiry));

                return [
                    'id' => $inquiry->id,
                    'name' => '
                    <div class="flex items-center gap-3">
                        <div class="min-w-0">
                            <p class="text-sm font-semibold text-slate-900 dark:text-white truncate">'
                        . e($inquiry->name) . '
                            </p>
                            <p class="text-xs text-slate-500 truncate">'
                        . e($inquiry->email) . '
                            </p>
                        </div>
                    </div>',

                    'message' => $inquiry->message ? e(Str::limit($inquiry->message,30)) : '<span class="text-slate-400">-</span>',
                    'country' => $inquiry->country ? e($inquiry->country) : '<span class="text-slate-400">-</span>',
                    'is_read' => $inquiry->is_read ?  '<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
            Sudah dibaca
       </span>' : '<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700">
            Baru
       </span>',
                    'created_at' => Carbon::parse($inquiry->created_at)
                        ->locale('id')
                        ->translatedFormat('d M Y'),
                    'action' => '<a href="' . $showUrl . '" class="text-xs font-bold uppercase tracking-wide text-primary hover:underline">Lihat Pesan</a>'
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}


    public function stats()
    {
        $new_inquiry = Inquiry::where('is_read', false)->count();

        $read_inquiry = Inquiry::where('is_read', true)->count();

        return response()->json([
            'new_inquiry' => $new_inquiry,
            'read_inquiry' => $read_inquiry
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Inquiry $inquiry)
    {
        return view('admin.pages.inquiries.inquiry-view', compact('inquiry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Toggle inquiry read status.
     */
    public function markRead(Inquiry $inquiry)
    {
        if (! $inquiry->is_read) {
            $inquiry->is_read = true;
            $inquiry->save();
        }

        if (request()->wantsJson()) {
            return response()->json([
                'message' => 'Inquiry marked as read',
                'is_read' => $inquiry->is_read,
            ]);
        }

        return back()->with('success', 'Inquiry has been marked as read.');
    }
}
