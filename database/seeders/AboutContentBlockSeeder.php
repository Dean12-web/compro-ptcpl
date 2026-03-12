<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class AboutContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            HERO ABOUT
            */
            $hero = ContentBlock::create([
                'key' => 'about_hero_section',
                'block_type' => 'single',
                'title' => 'ABOUT',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['badge','Badge','text'],
                ['title','Title','text'],
                ['hero_image','Hero Image','image']
            ]);


            /*
            COMPANY PROFILE
            */
            $profile = ContentBlock::create([
                'key' => 'about_company_profile_section',
                'block_type' => 'single',
                'title' => 'ABOUT',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($profile->id,[
                ['section_label','Section Label','text'],
                ['title','Title','text'],
                ['description_1','Description Paragraph 1','textarea'],
                ['description_2','Description Paragraph 2','textarea'],
                ['mission_title','Mission Title','text'],
                ['mission_description','Mission Description','textarea'],
                ['vision_title','Vision Title','text'],
                ['vision_description','Vision Description','textarea']
            ]);


            /*
            CORE VALUES
            */
            $values = ContentBlock::create([
                'key' => 'about_core_values_section',
                'block_type' => 'multiple',
                'title' => 'ABOUT',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=3;$i++){

                $this->createItems($values->id,[
                    ["value_{$i}_icon","Value {$i} Icon",'text'],
                    ["value_{$i}_title","Value {$i} Title",'text'],
                    ["value_{$i}_description","Value {$i} Description",'textarea'],
                ]);
            }


            /*
            CERTIFICATIONS
            */
            $certifications = ContentBlock::create([
                'key' => 'about_certifications_section',
                'block_type' => 'multiple',
                'title' => 'ABOUT',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($certifications->id,[
                    ["cert_{$i}_icon","Certification {$i} Icon",'text'],
                    ["cert_{$i}_label","Certification {$i} Label",'text'],
                ]);
            }


            /*
            COMPANY STATS
            */
            $stats = ContentBlock::create([
                'key' => 'about_company_stats_section',
                'block_type' => 'multiple',
                'title' => 'ABOUT',
                'sort_order' => 5,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($stats->id,[
                    ["stat_{$i}_number","Stat {$i} Number",'number'],
                    ["stat_{$i}_label","Stat {$i} Label",'text'],
                ]);
            }

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