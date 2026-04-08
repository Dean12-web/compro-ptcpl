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
        $sustainability_hero = ContentBlock::where('key', 'sustainability_hero_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $sustainability_conscious_sourcing = ContentBlock::where('key', 'sustainability_conscious_sourcing_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $sustainability_circular_production = ContentBlock::where('key', 'sustainability_circular_production_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $sustainability_cta = ContentBlock::where('key', 'sustainability_cta_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();  

        return view('front.pages.sustainability', compact('sustainability_hero', 'sustainability_conscious_sourcing', 'sustainability_circular_production', 'sustainability_cta'));
    }

    public function gallery($locale)
    {
        $gallery_hero = ContentBlock::where('key', 'gallery_hero_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        // dd($gallery_hero->items->where('field_key', 'hero_image')->first()->field_value);
        
        $gallery_factory = ContentBlock::where('key', 'gallery_factory_facilities_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        
        $gallery_production = ContentBlock::where('key', 'gallery_production_process_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();

        $gallery_packaging = ContentBlock::where('key', 'gallery_packaging_loading_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        
        $gallery_qc = ContentBlock::where('key', 'gallery_quality_control_section')
            ->where('locale', $locale)
            ->where('is_active', true)
            ->with('items')
            ->first();
        

        return view('front.pages.gallery',compact('gallery_hero','gallery_factory','gallery_production','gallery_packaging','gallery_qc'));
    }
    

}
