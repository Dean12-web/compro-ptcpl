<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ProductController extends Controller
{
    public function index($locale, Request $request)
    {
        $products = Product::query()
            ->with('primaryImage')
            ->when($request->material, function ($query) use ($request) {
                $query->where('material', $request->material);
            })
            ->where('is_active', true)
            ->latest()
            ->paginate(9)
            ->withQueryString();

        $materials = Product::select('material')->distinct()->pluck('material');
        $capacities = Product::select('capacity')->distinct()->pluck('capacity');

        $product_hero = ContentBlock::where('key', 'products_hero_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        return view('front.pages.products', compact(
            'product_hero',
            'materials',
            'capacities',
            'products'
        ));
    }

    public function show($locale, string $slug)
    {
        $product_detail_features = ContentBlock::where('key', 'product_detail_features')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $product_detail_choose = ContentBlock::where('key', 'product_detail_why_choose')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $product = Product::where('slug', $slug)
            ->with(['images', 'primaryImage'])
            ->firstOrFail();
        return view('front.pages.product-detail', compact('product', 'product_detail_features', 'product_detail_choose'));
    }


    public function data($locale, Request $request)
    {
        $materials = [
            'paper-pulp' => 'Pulp Kertas',
            'plastic-egg-tray' => 'Rak Telur Plastik',
            'styrofoam-tray' => 'Rak Telur Styrofoam',
            'natural-fiber' => 'Serat Alami',
        ];
        $products = Product::query()
            ->with('primaryImage')

            ->when($request->material, fn($q) => $q->where('material', $request->material))
            ->when($request->capacity, fn($q) => $q->where('capacity', $request->capacity))

            ->when($request->sort, function ($q) use ($request) {
                match ($request->sort) {
                    'oldest' => $q->oldest(),
                    'name_asc' => $q->orderBy('name', 'asc'),
                    'name_desc' => $q->orderBy('name', 'desc'),
                    default => $q->latest(),
                };
            }, fn($q) => $q->latest())

            ->where('is_active', true)
            ->paginate();

        return view('front.components.product-list', compact('products'))->render();
    }
}
