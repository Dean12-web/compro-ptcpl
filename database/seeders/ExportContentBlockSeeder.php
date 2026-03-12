<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class ExportContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            HERO
            */
            $hero = ContentBlock::create([
                'key' => 'export_hero',
                'block_type' => 'single',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['badge','Badge','text'],
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['hero_image','Hero Image','image'],
                ['button_text','Button Text','text'],
                ['button_link','Button Link','link'],
            ]);


            /*
            EXPORT STATS
            */
            $stats = ContentBlock::create([
                'key' => 'export_stats',
                'block_type' => 'multiple',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=3;$i++){
                $this->createItems($stats->id,[
                    ["stat_{$i}_icon","Stat {$i} Icon",'text'],
                    ["stat_{$i}_title","Stat {$i} Title",'text'],
                    ["stat_{$i}_value","Stat {$i} Value",'number'],
                    ["stat_{$i}_description","Stat {$i} Description",'text'],
                ]);
            }


            /*
            EXPORT MARKETS
            */
            $markets = ContentBlock::create([
                'key' => 'export_markets',
                'block_type' => 'single',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($markets->id,[
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['map_image','Map Image','image'],

                ['market_1','Market 1','text'],
                ['market_2','Market 2','text'],
                ['market_3','Market 3','text'],
                ['market_4','Market 4','text'],
            ]);


            /*
            SHIPPING METHODS
            */
            $shipping = ContentBlock::create([
                'key' => 'shipping_methods',
                'block_type' => 'multiple',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=3;$i++){
                $this->createItems($shipping->id,[
                    ["shipping_{$i}_icon","Shipping {$i} Icon",'text'],
                    ["shipping_{$i}_title","Shipping {$i} Title",'text'],
                    ["shipping_{$i}_description","Shipping {$i} Description",'textarea'],
                ]);
            }


            /*
            LEAD TIMES
            */
            $lead = ContentBlock::create([
                'key' => 'lead_times',
                'block_type' => 'multiple',
                'sort_order' => 5,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=4;$i++){
                $this->createItems($lead->id,[
                    ["region_{$i}","Region {$i}",'text'],
                    ["ports_{$i}","Ports {$i}",'text'],
                    ["transit_time_{$i}","Transit Time {$i}",'text'],
                ]);
            }


            /*
            PACKAGING STANDARDS
            */
            $packaging = ContentBlock::create([
                'key' => 'packaging_standards',
                'block_type' => 'multiple',
                'sort_order' => 6,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=2;$i++){
                $this->createItems($packaging->id,[
                    ["packaging_{$i}_image","Packaging {$i} Image",'image'],
                    ["packaging_{$i}_title","Packaging {$i} Title",'text'],
                    ["packaging_{$i}_description","Packaging {$i} Description",'textarea'],
                ]);
            }


            /*
            CTA
            */
            $cta = ContentBlock::create([
                'key' => 'export_cta',
                'block_type' => 'single',
                'sort_order' => 7,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($cta->id,[
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['button_primary_text','Primary Button Text','text'],
                ['button_primary_link','Primary Button Link','link'],
                ['button_secondary_text','Secondary Button Text','text'],
                ['button_secondary_link','Secondary Button Link','link'],
            ]);

        }
    }


    private function createItems($blockId,$fields)
    {
        $order = 1;

        foreach ($fields as $field){

            ContentBlockItem::create([
                'block_id' => $blockId,
                'field_key' => $field[0],
                'field_label' => $field[1],
                'field_type' => $field[2],
                'field_value' => null,
                'sort_order' => $order++
            ]);

        }
    }
}