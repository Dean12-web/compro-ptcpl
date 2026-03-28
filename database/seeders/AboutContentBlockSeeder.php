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
                ['hero_image','Hero Image','image'],
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
                ['title','Title','text'],
                ['description_1','Description Paragraph 1','textarea'],
                ['description_2','Description Paragraph 2','textarea'],
                ['mission_description','Mission Description','textarea'],
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
                    ["value_{$i}_description","Value {$i} Description",'textarea'],
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