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
        $export_hero = ContentBlock::where('key', 'export_hero')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $export_stats = ContentBlock::where('key', 'export_stats')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $export_markets = ContentBlock::where('key', 'export_markets')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        
        $export_shipping = ContentBlock::where('key', 'shipping_methods')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        
        $export_lead_times = ContentBlock::where('key', 'lead_times')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $export_packaging = ContentBlock::where('key', 'packaging_standards')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        
        $export_cta = ContentBlock::where('key', 'export_cta')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        
        return view('front.pages.export', compact('export_hero', 'export_stats', 'export_markets', 'export_shipping', 'export_lead_times', 'export_packaging', 'export_cta'));
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
