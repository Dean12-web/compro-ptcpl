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
                'title' => 'PRODUCTION',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['title','Title','text', $locale === 'id' ? 'Proses Produksi Kami' : 'Our Production Process'],
                ['description','Description','textarea', $locale === 'id' ? 'Deskripsi Proses Produksi' : 'Production Process Description'],
                ['hero_image','Hero Image','image'],
            ]);


            /*
            PRODUCTION STEPS
            */
            $steps = ContentBlock::create([
                'key' => 'production_steps_section',
                'block_type' => 'multiple',
                'title' => 'PRODUCTION',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=4;$i++){

                $this->createItems($steps->id,[
                    ["step_{$i}_title","Step {$i} Title",'text', $locale === 'id' ? "Langkah {$i}" : "Step {$i}"],
                    ["step_{$i}_description","Step {$i} Description",'textarea', $locale === 'id' ? "Deskripsi Langkah {$i}" : "Step {$i} Description"],
                ]);
            }


            /*
            FACTORY CAPACITY
            */
            $capacity = ContentBlock::create([
                'key' => 'factory_capacity_section',
                'block_type' => 'multiple',
                'title' => 'PRODUCTION',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($capacity->id,[
                ['section_title','Section Title','text', $locale === 'id' ? 'Kapasitas Pabrik Kami' : 'Our Factory Capacity'],

                ['capacity_1_value','Capacity 1 Value','text', $locale === 'id' ? 'Kapasitas 1' : 'Capacity 1'],
                ['capacity_1_label','Capacity 1 Label','text', $locale === 'id' ? 'Label Kapasitas 1' : 'Capacity 1 Label'],

                ['capacity_2_value','Capacity 2 Value','text', $locale === 'id' ? 'Kapasitas 2' : 'Capacity 2'],
                ['capacity_2_label','Capacity 2 Label','text', $locale === 'id' ? 'Label Kapasitas 2' : 'Capacity 2 Label'],

                ['capacity_3_value','Capacity 3 Value','text', $locale === 'id' ? 'Kapasitas 3' : 'Capacity 3'],
                ['capacity_3_label','Capacity 3 Label','text', $locale === 'id' ? 'Label Kapasitas 3' : 'Capacity 3 Label'],
            ]);


            /*
            QUALITY CONTROL
            */
            $quality = ContentBlock::create([
                'key' => 'quality_control_section',
                'block_type' => 'multiple',
                'title' => 'PRODUCTION',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($quality->id,[
                ['section_label','Section Label','text', $locale === 'id' ? 'Label Bagian' : 'Section Label'],
                ['title','Title','text', $locale === 'id' ? 'Judul' : 'Title'],
                ['description','Description','textarea', $locale === 'id' ? 'Deskripsi' : 'Description'],

                ['check_1_title','Check 1 Title','text', $locale === 'id' ? 'Check 1 Title' : 'Check 1 Title'],
                ['check_1_description','Check 1 Description','textarea', $locale === 'id' ? 'Check 1 Description' : 'Check 1 Description'],

                ['check_2_title','Check 2 Title','text', $locale === 'id' ? 'Check 2 Title' : 'Check 2 Title'],
                ['check_2_description','Check 2 Description','textarea', $locale === 'id' ? 'Check 2 Description' : 'Check 2 Description'],

                ['check_3_title','Check 3 Title','text', $locale === 'id' ? 'Check 3 Title' : 'Check 3 Title'],
                ['check_3_description','Check 3 Description','textarea', $locale === 'id' ? 'Check 3 Description' : 'Check 3 Description'],
            ]);


            /*
            CTA
            */
            $cta = ContentBlock::create([
                'key' => 'production_cta_section',
                'block_type' => 'single',
                'title' => 'PRODUCTION',
                'sort_order' => 6,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($cta->id,[
                ['title','Title','text', $locale === 'id' ? 'Judul' : 'Title'],
                ['description','Description','textarea', $locale === 'id' ? 'Deskripsi' : 'Description'],
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
                'field_value' => $field[3] ?? null,
                'sort_order' => $order++
            ]);

        }
    }
}