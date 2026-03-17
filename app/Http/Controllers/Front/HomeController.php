<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($locale)
    {
        $home_hero = ContentBlock::where('key', 'home_hero_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $home_global_reach = ContentBlock::where('key', 'home_global_reach_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $home_cta_= ContentBlock::where('key','contact_cta_section')
            ->where('locale',$locale)
            ->where('is_active',true)
            ->with('items')
            ->first();

        $home_highlight = ContentBlock::where('key', 'home_highlights_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $setting = Setting::first();
        return view('front.pages.home', compact('home_hero','home_global_reach','home_cta_','setting','home_highlight'));
    }
}
