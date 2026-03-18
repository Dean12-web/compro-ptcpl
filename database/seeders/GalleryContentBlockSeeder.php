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
                'title' => 'GALLERY',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
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
                'title' => 'GALLERY',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($factory->id,[
                ['factory_facilities_title','Factory Facilities Title','text'],
                ['factory_facilities_subtitle','Factory Facilities Subtitle','textarea'],
            ]);

            for($i=1;$i<=3;$i++){

                $this->createItems($factory->id,[
                    ["factory_facility_{$i}_image","Factory Facility {$i} Image",'image'],
                    ["factory_facility_{$i}_section","Factory Facility {$i} Section",'text'],
                    ["factory_facility_{$i}_description","Factory Facility {$i} Description",'textarea'],
                ]);
            }


            /*
            PRODUCTION PROCESS GALLERY
            */
            $process = ContentBlock::create([
                'key' => 'gallery_production_process_section',
                'block_type' => 'multiple',
                'title' => 'GALLERY',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($process->id,[
                ['production_process_title','Production Process Title','text'],
                ['production_process_subtitle','Production Process Subtitle','textarea'],
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($process->id,[
                    ["production_process_{$i}_image","Production Process {$i} Image",'image'],
                    ["production_process_{$i}_section","Production Process {$i} Section",'text'],
                    ["production_process_{$i}_description","Production Process {$i} Description",'textarea'],
                ]);
            }


            /*
            PACKAGING & LOADING
            */
            $packaging = ContentBlock::create([
                'key' => 'gallery_packaging_loading_section',
                'block_type' => 'multiple',
                'title' => 'GALLERY',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($packaging->id,[
                ['packaging_title','Packaging Title','text'],
                ['packaging_subtitle','Packaging Subtitle','textarea'],
            ]);

            for($i=1;$i<=2;$i++){

                $this->createItems($packaging->id,[
                    ["packaging_{$i}_image","Packaging {$i} Image",'image'],
                    ["packaging_{$i}_section","Packaging {$i} Section",'text'],
                    ["packaging_{$i}_description","Packaging {$i} Description",'textarea'],
                ]);
            }

             $quality_control = ContentBlock::create([
                'key' => 'gallery_quality_control_section',
                'block_type' => 'multiple',
                'title' => 'GALLERY',
                'sort_order' => 5,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($quality_control->id,[
                ['quality_control_title','Quality Control Title','text'],
                ['quality_control_subtitle','Quality Control Subtitle','textarea'],
            ]);

            for($i=1;$i<=2;$i++){

                $this->createItems($quality_control->id,[
                    ["quality_{$i}_image","Quality Control {$i} Image",'image'],
                    ["quality_{$i}_description","Quality Control {$i} Description",'textarea'],
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