<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about($locale)
    {
        $about_hero = ContentBlock::where('key', 'about_hero_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $about_company_profile = ContentBlock::where('key', 'about_company_profile_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $about_core_values = ContentBlock::where('key', 'about_core_values_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();


        return view('front.pages.about', compact('about_hero','about_company_profile','about_core_values'));
    }


    public function production($locale)
    {
        $production_hero = ContentBlock::where('key', 'production_hero_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $production_steps = ContentBlock::where('key', 'production_steps_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $production_factory_capacity = ContentBlock::where('key', 'factory_capacity_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        
        $production_quality_control = ContentBlock::where('key', 'quality_control_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $production_cta_section = ContentBlock::where('key', 'production_cta_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        
        return view('front.pages.production', compact('production_hero','production_steps','production_factory_capacity','production_quality_control','production_cta_section'));
    }

    public function exports($locale)
    {
        return view('front.pages.export');
    }

    public function sustainability($locale)
    {
        return view('front.pages.sustainability');
    }

    public function gallery($locale)
    {
        return view('front.pages.gallery');
    }

}
