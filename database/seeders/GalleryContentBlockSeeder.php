<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class GalleryContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            HERO
            */
            $hero = ContentBlock::create([
                'key' => 'gallery_hero_section',
                'block_type' => 'single',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['badge','Badge','text'],
                ['title','Title','text'],
                ['description','Description','textarea'],
                ['hero_image','Hero Image','image']
            ]);


            /*
            FACTORY FACILITIES
            */
            $factory = ContentBlock::create([
                'key' => 'gallery_factory_facilities_section',
                'block_type' => 'multiple',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=3;$i++){

                $this->createItems($factory->id,[
                    ["facility_{$i}_image","Facility {$i} Image",'image'],
                    ["facility_{$i}_title","Facility {$i} Title",'text'],
                    ["facility_{$i}_description","Facility {$i} Description",'textarea'],
                ]);
            }


            /*
            PRODUCTION PROCESS GALLERY
            */
            $process = ContentBlock::create([
                'key' => 'gallery_production_process_section',
                'block_type' => 'multiple',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($process->id,[
                    ["process_{$i}_image","Process {$i} Image",'image'],
                    ["process_{$i}_title","Process {$i} Title",'text'],
                    ["process_{$i}_description","Process {$i} Description",'textarea'],
                ]);
            }


            /*
            PACKAGING & LOADING
            */
            $packaging = ContentBlock::create([
                'key' => 'gallery_packaging_loading_section',
                'block_type' => 'multiple',
                'sort_order' => 4,
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