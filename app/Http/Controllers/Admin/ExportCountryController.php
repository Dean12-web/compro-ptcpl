<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExportCountry;
use Illuminate\Http\Request;

class ExportCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            [
                'key' => 'name',
                'label' => 'Nama Negara',
                'sortable' => true
            ],
            [
                'key' => 'region',
                'label' => 'Wilayah'
            ],
            [
                'key' => 'iso_code',
                'label' => 'Kode ISO'
            ],
            [
                'key' => 'is_active',
                'label' => 'Status'
            ],
            [
                'key' => 'action',
                'label' => 'Aksi'
            ]
        ];

        $rows = [];
        return view('admin.pages.export-countries.index', compact('columns', 'rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view(Request $request)
    {
        $query = ExportCountry::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('region')) {
            $query->where('region', $request->region);
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        $query->orderBy($sort, $direction);

        $export_countries = $query->paginate(5);

        return response()->json([
            'rows' => $export_countries->map(function ($export_country) {
                return [
                    'id' => $export_country->id,
                    'name' => "
<div class='flex items-center gap-3'>
    <div class='size-8 rounded overflow-hidden bg-slate-100 flex items-center justify-center'>
        <img class='w-full h-full object-cover'
            src='https://flagicons.lipis.dev/flags/4x3/" . strtolower($export_country->iso_code) . ".svg'>
    </div>
    <div>
        <p class='font-bold text-slate-900 dark:text-white'>{$export_country->name}</p>
    </div>
</div>
",

                    'region' => $export_country->region,
                    'iso_code' => $export_country->iso_code,
                    'is_active' => $export_country->is_active
                        ? '<span class="text-[10px] font-bold uppercase text-primary">Aktif</span>'
                        : '<span class="text-[10px] font-bold uppercase text-slate-400">Tidak aktif</span>',
                    'action' => '
                                <button
                                @click="deleteExportCountry(' . $export_country->id . ')"
                                    class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined !text-lg">delete</span>
                                </button>'
                ];
            }),

            'pagination' => [
                'current_page' => $export_countries->currentPage(),
                'last_page' => $export_countries->lastPage(),
                'total' => $export_countries->total(),
                'from' => $export_countries->firstItem(),
                'to' => $export_countries->lastItem()
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'region' => 'required',
            'iso_code' => 'required|max:2',
            'is_active' => 'nullable'
        ]);

        $data['is_active'] = $request->has('is_active');

        ExportCountry::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Negara Ekspor Berhasil dibuat!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExportCountry $export_country)
    {
        $export_country->delete();


        return response()->json([
            'success' => true,
            'message' => 'Negara ekspor berhasil dihapus!'
        ]);
    }
}
