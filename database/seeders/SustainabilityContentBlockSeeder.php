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

            $this->createItems($loop->id,[
                ['title','Title','text'],
                ['subtitle','Subtitle','textarea'],
            ]);


            for($i=1;$i<=4;$i++){

                $this->createItems($loop->id,[
                    ["step_{$i}_title","Step {$i} Title",'text'],
                    ["step_{$i}_description","Step {$i} Description",'textarea'],
                ]);
            }


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
                ['description','Description','textarea']
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