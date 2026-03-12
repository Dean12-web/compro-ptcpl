<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class ProductionContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            HERO
            */
            $hero = ContentBlock::create([
                'key' => 'production_hero_section',
                'block_type' => 'single',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['hero_image','Hero Image','image'],
                ['button_text','Button Text','text'],
                ['button_link','Button Link','link']
            ]);


            /*
            PRODUCTION STEPS
            */
            $steps = ContentBlock::create([
                'key' => 'production_steps_section',
                'block_type' => 'multiple',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($steps->id,[
                    ["step_{$i}_icon","Step {$i} Icon",'text'],
                    ["step_{$i}_title","Step {$i} Title",'text'],
                    ["step_{$i}_description","Step {$i} Description",'textarea'],
                ]);
            }


            /*
            FACTORY CAPACITY
            */
            $capacity = ContentBlock::create([
                'key' => 'factory_capacity_section',
                'block_type' => 'multiple',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($capacity->id,[
                ['section_title','Section Title','text'],
                ['factory_image','Factory Image','image'],

                ['capacity_1_icon','Capacity 1 Icon','text'],
                ['capacity_1_value','Capacity 1 Value','text'],
                ['capacity_1_label','Capacity 1 Label','text'],

                ['capacity_2_icon','Capacity 2 Icon','text'],
                ['capacity_2_value','Capacity 2 Value','text'],
                ['capacity_2_label','Capacity 2 Label','text'],

                ['capacity_3_icon','Capacity 3 Icon','text'],
                ['capacity_3_value','Capacity 3 Value','text'],
                ['capacity_3_label','Capacity 3 Label','text'],
            ]);


            /*
            QUALITY CONTROL
            */
            $quality = ContentBlock::create([
                'key' => 'quality_control_section',
                'block_type' => 'multiple',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($quality->id,[
                ['section_label','Section Label','text'],
                ['title','Title','text'],
                ['description','Description','textarea'],

                ['check_1_icon','Check 1 Icon','text'],
                ['check_1_title','Check 1 Title','text'],
                ['check_1_description','Check 1 Description','textarea'],

                ['check_2_icon','Check 2 Icon','text'],
                ['check_2_title','Check 2 Title','text'],
                ['check_2_description','Check 2 Description','textarea'],

                ['check_3_icon','Check 3 Icon','text'],
                ['check_3_title','Check 3 Title','text'],
                ['check_3_description','Check 3 Description','textarea'],
            ]);


            /*
            WORKFLOW VISUAL
            */
            $workflow = ContentBlock::create([
                'key' => 'workflow_visual_section',
                'block_type' => 'multiple',
                'sort_order' => 5,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=6;$i++){

                $this->createItems($workflow->id,[
                    ["workflow_{$i}_icon","Workflow {$i} Icon",'text'],
                    ["workflow_{$i}_label","Workflow {$i} Label",'text'],
                ]);
            }


            /*
            CTA
            */
            $cta = ContentBlock::create([
                'key' => 'production_cta_section',
                'block_type' => 'single',
                'sort_order' => 6,
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