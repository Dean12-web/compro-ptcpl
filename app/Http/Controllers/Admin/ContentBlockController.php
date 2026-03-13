<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            [
                'key' => 'title',
                'label' => 'Judul',
                'sortable' => true
            ],
            [
                'key' => 'key',
                'label'=> 'Key'
            ],
            [
                'key' => 'locale',
                'label' => 'Bahasa'
            ],
            [
                'key' => 'status',
                'label' => 'Status'
            ],
            [
                'key' => 'action',
                'label' => 'Aksi'
            ]
        ];

        $rows = [];
        return view('admin.pages.content-blocks.index',compact('columns','rows'));
    }

    /**
     * Show the form for view a new resource.
     */
    public function view(Request $request)
    {
        $query = ContentBlock::query();

        if($request->filled('title')){
            $query->where('title',$request->title);
        }

        if($request->filled('search')){
            $query->where(
                'title','like','%' . $request->search . '%'
            );
        }

        $sort = $request->get('sort','created_at');
        $direction = $request->get('direction','desc');

        $query->orderBy($sort,$direction);

        $content_blocks = $query->paginate(10);

        return response()->json([
            'rows' => $content_blocks->map(function($content_block){
                return[
                    'id' => $content_block->id,
                    'title' => $content_block->title,
                    'key' => $content_block->key,
                    'locale' => $content_block->locale,
                    'status' => $content_block->is_active
                        ? '<span class="text-[10px] font-bold uppercase text-primary">Aktif</span>'
                        : '<span class="text-[10px] font-bold uppercase text-slate-400">Tidak aktif</span>',
                    'action' => '
                                <button 
                                    @click="$dispatch(\'edit-web-section\',' . $content_block->id . ')"
                                    class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined !text-lg">edit</span>
                                </button>'
                ];
            }),
            'pagination' => [
                'current_page' => $content_blocks->currentPage(),
                'last_page' => $content_blocks->lastPage(),
                'total'     => $content_blocks->total(),
                'from'      => $content_blocks->firstItem(),
                'to'        => $content_blocks->lastItem()
            ]
        ]);

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
    public function show(ContentBlock $web_content)
    {
        $web_content->load('items');

        return response()->json([
            'id' => $web_content->id,
            'key' => $web_content->key,
            'locale' => $web_content->locale,
            'block_type' => $web_content->block_type,
            'is_active' => $web_content->is_active,
            'items' => $web_content->items->map(function($item){
                return[
                    'field_key' => $item->field_key,
                    'field_label' => $item->field_label,
                    'field_type' => $item->field_type,
                    'field_value' => $item->field_value,
                ];
            })
        ]);
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
    public function update(Request $request, ContentBlock $web_content)
    {
        if(!$request->has('items')){
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang dikirim'
            ],422);
        }

        foreach($request->items as $index => $item){
            $contentItem = ContentBlockItem::where('block_id',$web_content->id)->where('field_key',$item['field_key'])->first();

            if(!$contentItem) continue;

            $value = $item['field_value'] ?? null;

            if($value === 'null' || $value === ''){
                $value = null;
            }

            if($contentItem->field_type === 'image' && $request->hasFile("items.$index.field_value")){

                if($contentItem->field_value){
                    Storage::disk('public')->delete($contentItem->field_value);
                }
                $file = $request->file("items.$index.field_value");

                $path = $file->store('content-blocks','public');

                $value = $path;
            }

            $contentItem->update([
                'field_value' => $value
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Konten berhasil diperbarui'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
