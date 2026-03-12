<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;
use Illuminate\Http\Request;

class ContentBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            [
                'key' => 'key',
                'label' => 'Key',
                'sortable' => true
            ],
            [
                'key' => 'locale',
                'label' => 'locale'
            ],
            [
                'key' => 'status',
                'label' => 'status'
            ],
            [
                'key' => 'action',
                'label' => 'action'
            ]
        ];

        $rows = [];
        return view('admin.pages.content-blocks.index',compact('columns','rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'locale' => 'required|in:id,en',
            'block_type' => 'required|in:single,multiple',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',

            'items' => 'nullable|array',
            'items.*.field_key' => 'required|string|max:255',
            'items.*.field_label' => 'required|string|max:255',
            'items.*.field_type' => 'required|in:text,textarea,image,number,link',
            'items.*.field_value' => 'nullable'
        ]);

        if($validated['block_type'] === 'single' && isset($validated['items']) && count($validated['items']) > 1){
            return response()->json([
                'success' => false,
                'message' => 'Single block hanya boleh memiliki 1 field'
            ],422);
        }

        $block = ContentBlock::create([
            'key' => $validated['key'],
            'title' => $validated['title'] ?? null,
            'locale' => $validated['locale'],
            'block_type' => $validated['block_type'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $validated['is_active'] ?? 1
        ]);

        if (isset($validated['items'])) {
            foreach($validated['items'] as $index => $item){
                ContentBlockItem::create([
                    'block_id' => $block->id,
                    'field_key' => $item['field_key'],
                    'field_label' => $item['field_label'] ?? null,
                    'field_type' => $item['field_type'],
                    'field_value' => $item['field_value']?? null,
                    'sort_order' => $index
                ]);
            }
        }

         return response()->json([
            'success' => true,
            'message' => 'Web konten berhasil dibuat!'
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
    public function destroy(string $id)
    {
        //
    }
}
