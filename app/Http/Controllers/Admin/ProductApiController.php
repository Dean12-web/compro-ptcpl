<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('primaryImage');

        if ($request->filled('search')) {

            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('status')) {

            $query->where('is_active', $request->status);
        }

        if ($request->filled('material')) {

            $query->where('material', $request->material);
        }

        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        $query->orderBy($sort, $direction);

        $products = $query->paginate(10);

        return response()->json([
            'rows' => $products->map(function ($product) {

                return [

                    'id' => $product->id,

                    'image' => $product->primaryImage
                        ? '<img src="' . asset('storage/' . $product->primaryImage->image_path) . '" class="w-10 h-10 rounded">'
                        : '',

                    'name' => '
                    <div class="flex items-center gap-3">

                        <div class="size-10 rounded bg-slate-100 dark:bg-slate-900 flex items-center justify-center overflow-hidden">
                            <img src="' . ($product->primaryImage
                        ? asset('storage/' . $product->primaryImage->image_path)
                        : 'https://via.placeholder.com/40'
                    ) . '" class="w-full h-full object-cover">
                        </div>

                        <div>
                            <p class="text-sm font-bold">' . $product->name . '</p>
                        </div>

                    </div>
                    ',

                    'dimensions' => $product->dimensions,
                    'material' => $product->material,

                    'weight' => $product->weight,

                    'capacity' => $product->capacity,

                    'status' => $product->is_active
                        ? '<span class="text-[10px] font-bold uppercase text-primary">Active</span>'
                        : '<span class="text-[10px] font-bold uppercase text-slate-400">Inactive</span>',

                    'action' => '<button 
                                    @click="$dispatch(\'edit-product\',' . $product->id . ')"
                                    class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined !text-lg">edit</span>
                                </button>
                                <button
                                    @click="deleteProduct(' . $product->id . ')"
                                    class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined !text-lg">delete</span>
                                </button>'

                ];
            }),

            'pagination' => [

                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'total' => $products->total()

            ]
        ]);
    }

    public function show(Product $product)
    {
        $product->load('images');

        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'capacity' => $product->capacity,
            'dimensions' => $product->dimensions,
            'weight' => $product->weight,
            'description' => $product->description,
            'material' => $product->material,
            'is_active' => $product->is_active,

            'images' => $product->images->map(function ($image) {
                return [
                    'id' => $image->id,
                    'url' => asset('storage/' . $image->image_path),
                    'is_primary' => $image->is_primary
                ];
            })
        ]);
    }

    public function stats()
    {
        $total = Product::count();

        $active = Product::where('is_active', true)->count();

        $thisMonth = Product::whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->count();

        $activePercent = $total > 0 ? round(($active / $total) * 100) : 0;

        return response()->json([
            'total_products' => $total,
            'active_products' => $active,
            'this_month' => $thisMonth,
            'active_percent' => $activePercent
        ]);
    }

    public function update(Request $request, Product $product)
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

        $newImages = $request->file('images', []);
        $currentImages = $product->images()->count();

        if ($currentImages + count($newImages) > 4) {

            return response()->json([
                'message' => 'Maximum 4 images allowed'
            ], 422);
        }


        $data['slug'] = Str::slug($request->name);

        $product->update($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('products', 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                    'is_primary' => false,
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil diubah'
        ]);
    }

    public function deleteImage(ProductImage $image)
    {

        Storage::disk('public')->delete($image->image_path);

        $image->delete();

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy(Product $product)
    {
        $images = ProductImage::where('product_id', $product->id)->get();

        foreach ($images as $image) {
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
        }

        ProductImage::where('product_id', $product->id)->delete();

        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil dihapus!'
        ]);
    }
}
