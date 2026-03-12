<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class SustainabilityContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            HERO
            */
            $hero = ContentBlock::create([
                'key' => 'sustainability_hero_section',
                'block_type' => 'single',
                'title' => 'SUSTAINABILITY',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['hero_image','Hero Image','image'],
                ['button_primary_text','Primary Button Text','text'],
                ['button_primary_link','Primary Button Link','link'],
                ['button_secondary_text','Secondary Button Text','text'],
                ['button_secondary_link','Secondary Button Link','link'],
            ]);


            /*
            CONSCIOUS SOURCING
            */
            $sourcing = ContentBlock::create([
                'key' => 'sustainability_conscious_sourcing_section',
                'block_type' => 'single',
                'title' => 'SUSTAINABILITY',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($sourcing->id,[
                ['badge','Badge','text'],
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['feature_1','Feature 1','text'],
                ['feature_2','Feature 2','text'],
                ['section_image','Section Image','image'],
            ]);


            /*
            CIRCULAR PRODUCTION LOOP
            */
            $loop = ContentBlock::create([
                'key' => 'sustainability_circular_production_section',
                'block_type' => 'multiple',
                'title' => 'SUSTAINABILITY',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($loop->id,[
                    ["step_{$i}_icon","Step {$i} Icon",'text'],
                    ["step_{$i}_title","Step {$i} Title",'text'],
                    ["step_{$i}_description","Step {$i} Description",'textarea'],
                ]);
            }


            /*
            EARTH GOALS
            */
            $goals = ContentBlock::create([
                'key' => 'sustainability_earth_goals_section',
                'block_type' => 'multiple',
                'title' => 'SUSTAINABILITY',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($goals->id,[
                ['section_title','Section Title','text'],
                ['section_description','Section Description','textarea'],
                ['highlight_stat','Highlight Stat','number'],
                ['highlight_label','Highlight Label','text'],

                ['goal_1_icon','Goal 1 Icon','text'],
                ['goal_1_title','Goal 1 Title','text'],
                ['goal_1_description','Goal 1 Description','textarea'],

                ['goal_2_icon','Goal 2 Icon','text'],
                ['goal_2_title','Goal 2 Title','text'],
                ['goal_2_description','Goal 2 Description','textarea'],

                ['goal_3_icon','Goal 3 Icon','text'],
                ['goal_3_title','Goal 3 Title','text'],
                ['goal_3_description','Goal 3 Description','textarea'],

                ['goal_4_icon','Goal 4 Icon','text'],
                ['goal_4_title','Goal 4 Title','text'],
                ['goal_4_description','Goal 4 Description','textarea'],
            ]);


            /*
            CTA
            */
            $cta = ContentBlock::create([
                'key' => 'sustainability_cta_section',
                'block_type' => 'single',
                'title' => 'SUSTAINABILITY',
                'sort_order' => 5,
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