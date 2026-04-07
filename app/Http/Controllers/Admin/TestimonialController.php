<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    public function index()
    {
        $columns = [
            [
                'key' => 'name',
                'label' => 'Nama',
                'sortable' => true,
            ],
            [
                'key' => 'company',
                'label' => 'Perusahaan'
            ],
            [
                'key' => 'country',
                'label' => 'Negara'
            ],
            [
                'key' => 'message',
                'label' => 'Testimoni',
                'sortable' => false
            ],
            [
                'key' => 'is_active',
                'label' => 'Status'
            ],
            [
                'key' => 'action',
                'label' => 'Aksi',
                'sortable' => false
            ]
        ];

        $rows = [];
        return view('admin.pages.testimonials.index', compact('columns', 'rows'));
    }

    public function view(Request $request)
    {
        $query = Testimonial::query();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $query->where(function ($builder) use ($searchTerm) {
                $builder->where('name', 'like', $searchTerm)
                    ->orWhere('country', 'like', $searchTerm)
                    ->orWhere('company', 'like', $searchTerm)
                    ->orWhere('message->en', 'like', $searchTerm)
                    ->orWhere('message->id', 'like', $searchTerm);
            });
        }

        $allowedSorts = ['name', 'country', 'company', 'is_active', 'sort_order', 'created_at'];
        $sort = $request->get('sort', 'created_at');
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'created_at';
        }

        $direction = $request->get('direction', 'desc');
        if (!in_array($direction, ['asc', 'desc'], true)) {
            $direction = 'desc';
        }

        $query->orderBy($sort, $direction);

        $testimonials = $query->paginate(10);

        return response()->json([
            'rows' => $testimonials->map(function ($testimony) {
                $message = is_array($testimony->message)
                    ? $testimony->message
                    : (json_decode($testimony->message, true) ?? []);

                $displayMessage = Str::limit(
                    $message['en'] ?? $message['id'] ?? $testimony->message ?? '',
                    80,
                    '…'
                );

                return [
                    'id' => $testimony->id,
                    'name' => $testimony->name,
                    'company' => $testimony->company,
                    'country' => $testimony->country,
                    'message' => "<div class='text-sm text-slate-600 dark:text-slate-300 font-medium'>$displayMessage</div>",
                    'is_active' => $testimony->is_active
                        ? '<span class="text-[10px] font-bold uppercase text-primary">Aktif</span>'
                        : '<span class="text-[10px] font-bold uppercase text-slate-400">Tidak aktif</span>',
                    'action' => '
                                <button
                                    @click="$dispatch(\'edit-testimonial\',' . $testimony->id . ')"
                                    class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined !text-lg">edit</span>
                                </button>
                                <button
                                    @click="deleteTestimonial(' . $testimony->id . ')"
                                    class="p-1.5 text-slate-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined !text-lg">delete</span>
                                </button>'
                ];
            }),
            'pagination' => [
                'current_page' => $testimonials->currentPage(),
                'last_page' => $testimonials->lastPage(),
                'total' => $testimonials->total(),
                'from' => $testimonials->firstItem(),
                'to' => $testimonials->lastItem()
            ]
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'message_en' => 'required|string',
            'message_id' => 'required|string',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer'
        ]);

        $testimonial = Testimonial::create([
            'name' => $data['name'],
            'company' => $data['company'] ?? null,
            'country' => $data['country'] ?? null,
            'message' => [
                'en' => $data['message_en'],
                'id' => $data['message_id']
            ],
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $data['sort_order'] ?? 0
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Testimoni berhasil disimpan',
            'id' => $testimonial->id
        ]);
    }

    public function show(Testimonial $testimonial)
    {
        $message = is_array($testimonial->message)
            ? $testimonial->message
            : (json_decode($testimonial->message, true) ?? []);

        return response()->json([
            'id' => $testimonial->id,
            'name' => $testimonial->name,
            'company' => $testimonial->company,
            'country' => $testimonial->country,
            'sort_order' => $testimonial->sort_order,
            'is_active' => $testimonial->is_active,
            'message_en' => $message['en'] ?? '',
            'message_id' => $message['id'] ?? ''
        ]);
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'message_en' => 'required|string',
            'message_id' => 'required|string',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer'
        ]);

        $testimonial->update([
            'name' => $data['name'],
            'company' => $data['company'] ?? null,
            'country' => $data['country'] ?? null,
            'message' => [
                'en' => $data['message_en'],
                'id' => $data['message_id']
            ],
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $data['sort_order'] ?? 0
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Testimoni berhasil diperbarui'
        ]);
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return response()->json([
            'success' => true,
            'message' => 'Testimoni berhasil dihapus'
        ]);
    }
}
