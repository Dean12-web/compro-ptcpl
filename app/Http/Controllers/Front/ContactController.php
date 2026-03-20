<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Models\Inquiry;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index($locale)
    {
        $contact_hero = ContentBlock::where('key', 'contact_hero_section')
                ->where('locale', $locale)
                ->where('is_active', true)
                ->with('items')
                ->first();

        $contact_form = ContentBlock::where('key', 'contact_form_section')
                ->where('locale', $locale)
                ->where('is_active', true)
                ->with('items')
                ->first();

        $contact_information = ContentBlock::where('key', 'contact_information_section')
                ->where('locale', $locale)
                ->where('is_active', true)
                ->with('items')
                ->first();

        $contact_detail = Setting::first();

        return view('front.pages.contact', compact('contact_hero', 'contact_form', 'contact_information','contact_detail'));
    }

    public function store(Request $request, $locale)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string|max:2000',
        ]);

        Inquiry::create($validated);

        $successMessage = __('general.contact_form_success');

        if ($request->input('origin') === 'home') {
            return redirect()->route('home', $locale)
                ->with('success', $successMessage);
        }

        return redirect()->route('contact', $locale)
            ->with('success', $successMessage);
    }
}
