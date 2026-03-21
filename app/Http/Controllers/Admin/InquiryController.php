<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        $columns = [
            [
                'key' => 'name',
                'label' => 'Nama',
                'sortable' => true
            ],
            [
                'key' => 'company',
                'label'=> 'Perusahaan'
            ],
            [
                'key' => 'country',
                'label' => 'Negara'
            ],
            [
                'key' => 'email',
                'label' => 'Email'
            ],
            [
                'key' => 'is_read',
                'label' => 'Status'
            ],
            [
                'key' => 'action',
                'label' => 'Aksi'
            ]
        ];

        $rows = [];
        return view('admin.pages.inquiries.index',compact('columns','rows'));
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
                    'name' => e($inquiry->name),
                    'company' => $inquiry->company ? e($inquiry->company) : '<span class="text-slate-400">-</span>',
                    'country' => $inquiry->country ? e($inquiry->country) : '<span class="text-slate-400">-</span>',
                    'email' => '<a href="mailto:' . e($inquiry->email) . '" class="text-primary hover:underline text-sm font-semibold">' . e($inquiry->email) . '</a>',
                    'is_read' => $inquiry->is_read ? 'Sudah dibaca' : 'Baru',
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
    public function store(Request $request)
    {
        
    }


    public function stats()
    {
        $new_inquiry = Inquiry::where('is_read',false)->count();

        $read_inquiry = Inquiry::where('is_read',true)->count();

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
    public function update(Request $request)
    {
    
    }

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
