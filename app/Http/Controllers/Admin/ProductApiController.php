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

        $materials = [
            'paper-pulp' => 'Pulp Kertas',
            'plastic-egg-tray' => 'Rak Telur Plastik',
            'styrofoam-tray' => 'Rak Telur Styrofoam',
            'natural-fiber' => 'Serat Alami',
        ];

        return response()->json([
            'rows' => $products->map(function ($product) use ($materials) {

                return [

                    'id' => $product->id,

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
                    'material' => $materials[$product->material] ?? $product->material,

                    'weight' => $product->weight,

                    'capacity' => $product->capacity,

                    'status' => $product->is_active
                        ? '<span class="text-[10px] font-bold uppercase text-primary">Aktif</span>'
                        : '<span class="text-[10px] font-bold uppercase text-slate-400">Tidak aktif</span>',

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
                'total' => $products->total(),
                'from' => $products->firstItem(),
                'to' => $products->lastItem()

            ]
        ]);
    }

    public function show(int $id)
    {
        $product = Product::where('id', $id)->with(['images', 'primaryImage'])->firstOrFail();
        $product->load('images');

        $descriptions = is_array($product->description)
            ? $product->description
            : (json_decode($product->description, true) ?? []);

        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'capacity' => $product->capacity,
            'dimensions' => $product->dimensions,
            'weight' => $product->weight,
            'description' => $product->getDescriptionForLocale(),
            'description_en' => $descriptions['en'] ?? '',
            'description_id' => $descriptions['id'] ?? '',
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

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description_id' => 'required|string',
            'description_en' => 'required|string',
            'dimensions' => 'nullable',
            'weight' => 'nullable',
            'capacity' => 'nullable',
            'material' => 'nullable',
            'is_active' => 'boolean',
            'images' => 'nullable|array|max:4',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);
        $product = Product::findOrFail($id);
        $newImages = $request->file('images', []);
        $currentImages = $product->images()->count();

        if ($currentImages + count($newImages) > 4) {

            return response()->json([
                'message' => 'Maximum 4 images allowed'
            ], 422);
        }
        $data['slug'] = Str::slug($request->name) . '-' . $product->id;
        $data['description'] = [
            'en' => $data['description_en'],
            'id' => $data['description_id'],
        ];

        unset($data['description_en'], $data['description_id']);
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

        $productId = $image->product_id;
        $wasPrimary = $image->is_primary;

        $image->delete();

        if ($wasPrimary) {
            $nextImage = ProductImage::where('product_id', $productId)
                ->orderByDesc('created_at')
                ->first();

            if ($nextImage) {
                ProductImage::where('product_id', $productId)->update(['is_primary' => false]);
                $nextImage->update(['is_primary' => true]);
            }
        }

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy(int $id)
    {
        $product = Product::findOrFail($id);
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
