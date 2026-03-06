<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [

            [
                'key' => 'name',
                'label' => 'Product',
                'sortable' => true
            ],

            [
                'key' => 'weight',
                'label' => 'Weight'
            ],
            [
                'key' => 'material',
                'label' => 'Material'
            ],

            [
                'key' => 'capacity',
                'label' => 'Capacity'
            ],

            [
                'key' => 'status',
                'label' => 'Status'
            ],

            [
                'key' => 'action',
                'label' => 'Action'
            ]

        ];

        $rows = [];
        return view('admin.pages.products.index', compact('columns', 'rows'));
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
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'dimensions' => 'nullable',
            'weight' => 'nullable',
            'capacity' => 'nullable',
            'material' => 'nullable',
            'is_active' => 'boolean',
            'images' => 'nullable|array|max:4',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data['slug'] = Str::slug($request->name) . '-' . time();
        $data['created_by'] = auth()->id();

        $product = Product::create($data);
        // dd($request->hasFile('images'));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {

                $path = $image->store('products', 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                    'is_primary' => $key === 0
                ]);
            }
        }

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasi dibuat!');
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
    public function destroy(Product $product)
    {
    }
}
