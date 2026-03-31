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
                ['title','Title','text', $locale === 'id' ? 'Galeri Pabrik & Proses Produksi' : 'Factory & Production Process Gallery'],
                ['description','Description','textarea', $locale === 'id' ? 'Description' : 'Description'],
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
                ['factory_facilities_title','Factory Facilities Title','text', $locale === 'id' ? 'Fasilitas Pabrik Kami' : 'Our Factory Facilities'],
                ['factory_facilities_subtitle','Factory Facilities Subtitle','textarea', $locale === 'id' ? 'Subtitle' : 'Subtitle'],
            ]);

            for($i=1;$i<=3;$i++){

                $this->createItems($factory->id,[
                    ["factory_facility_{$i}_image","Factory Facility {$i} Image",'image'],
                    ["factory_facility_{$i}_section","Factory Facility {$i} Section",'text', $locale === 'id' ? "Fasilitas Pabrik {$i}" : "Factory Facility {$i}"],
                    ["factory_facility_{$i}_description","Factory Facility {$i} Description",'textarea', $locale === 'id' ? "Description" : "Description"],
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
                ['production_process_title','Production Process Title','text', $locale === 'id' ? 'Proses Produksi Kami' : 'Our Production Process'],
                ['production_process_subtitle','Production Process Subtitle','textarea', $locale === 'id' ? 'Subtitle' : 'Subtitle'],
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($process->id,[
                    ["production_process_{$i}_image","Production Process {$i} Image",'image'],
                    ["production_process_{$i}_section","Production Process {$i} Section",'text', $locale === 'id' ? "Proses Produksi {$i}" : "Production Process {$i}"],
                    ["production_process_{$i}_description","Production Process {$i} Description",'textarea', $locale === 'id' ? "Description" : "Description"],
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
                ['packaging_title','Packaging Title','text', $locale === 'id' ? 'Pengemasan & Pemuatan' : 'Packaging & Loading'],
                ['packaging_subtitle','Packaging Subtitle','textarea', $locale === 'id' ? 'Subtitle' : 'Subtitle'],
            ]);

            for($i=1;$i<=2;$i++){

                $this->createItems($packaging->id,[
                    ["packaging_{$i}_image","Packaging {$i} Image",'image'],
                    ["packaging_{$i}_section","Packaging {$i} Section",'text', $locale === 'id' ? "Pengemasan {$i}" : "Packaging {$i}"],
                    ["packaging_{$i}_description","Packaging {$i} Description",'textarea', $locale === 'id' ? "Description" : "Description"],
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
                ['quality_control_title','Quality Control Title','text', $locale === 'id' ? 'Kontrol Kualitas' : 'Quality Control'],
                ['quality_control_subtitle','Quality Control Subtitle','textarea', $locale === 'id' ? 'Subtitle' : 'Subtitle'],
            ]);

            for($i=1;$i<=2;$i++){

                $this->createItems($quality_control->id,[
                    ["quality_{$i}_image","Quality Control {$i} Image",'image'],
                    ["quality_{$i}_description","Quality Control {$i} Description",'textarea', $locale === 'id' ? "Description" : "Description"],
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
                'field_value' => $field[3] ?? null,
                'sort_order' => $order++
            ]);

        }
    }
}