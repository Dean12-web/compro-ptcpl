<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries = Gallery::query()
            ->when($request->category, function ($query) use ($request) {
                $query->where('category', $request->category);
            })
            ->latest()
            ->paginate(8)
            ->withQueryString();

        return view('admin.pages.galleries.index', compact('galleries'));
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
            'category' => 'nullable|string|max:100',
            'image' => 'required|image|max:2048',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request
                ->file('image')
                ->store('galleries', 'public');
        }

        Gallery::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Galeri berhasil diupload!'
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
    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'category' => 'nullable|string|max:100',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            if ($gallery->image_path) {
                Storage::disk('public')->delete($gallery->image_path);
            }

            $data['image_path'] = $request
                ->file('image')
                ->store('galleries', 'public');
        }

        $gallery->update($data);

        return redirect()
            ->route('cpl.gallery')
            ->with('success', 'Galeri berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image_path) {
            Storage::disk('public')->delete($gallery->image_path);
        }

        $gallery->delete();

        return redirect()->back()->with('success', 'Galeri berhasil dihapus');
    }

    public function updateStatus(Gallery $gallery)
    {
        $gallery->update([
            'is_active' => !$gallery->is_active
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}
