<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class ContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            |----------------------------------
            | HERO SECTION
            |----------------------------------
            */
            $hero = ContentBlock::create([
                'key' => 'home_hero_section',
                'block_type' => 'single',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['badge','Badge','text'],
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['button_primary_text','Primary Button Text','text'],
                ['button_primary_link','Primary Button Link','link'],
                ['button_secondary_text','Secondary Button Text','text'],
                ['button_secondary_link','Secondary Button Link','link'],
                ['hero_image','Hero Image','image'],
                ['daily_output','Daily Output','number'],
                ['daily_output_label','Daily Output Label','text'],
            ]);


            /*
            |----------------------------------
            | HIGHLIGHTS / STATS
            |----------------------------------
            */
            $highlight = ContentBlock::create([
                'key' => 'home_highlights_section',
                'block_type' => 'multiple',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=3;$i++){

                $this->createItems($highlight->id,[
                    ["item_{$i}_title","Item {$i} Title",'text'],
                    ["item_{$i}_value","Item {$i} Value",'text'],
                    ["item_{$i}_description","Item {$i} Description",'text'],
                    ["item_{$i}_icon","Item {$i} Icon",'text'],
                ]);
            }


            /*
            |----------------------------------
            | GLOBAL REACH
            |----------------------------------
            */
            $global = ContentBlock::create([
                'key' => 'home_global_reach_section',
                'block_type' => 'single',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($global->id,[
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['map_image','Map Image','image'],
            ]);


            /*
            |----------------------------------
            | CONTACT CTA
            |----------------------------------
            */
            $contact = ContentBlock::create([
                'key' => 'contact_cta_section',
                'block_type' => 'single',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($contact->id,[
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['email','Email','text'],
                ['phone','Phone','text'],
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