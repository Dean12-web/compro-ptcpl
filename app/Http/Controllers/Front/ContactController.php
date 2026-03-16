<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
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
}
