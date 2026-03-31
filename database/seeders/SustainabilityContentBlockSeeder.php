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
                ['title','Title','text', $locale === 'id' ? 'Keberlanjutan di Inti Bisnis Kami' : 'Sustainability at the Core of Our Business'],
                ['description','Description','textarea', $locale === 'id' ? 'Deskripsi' : 'Description'],
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
                ['badge','Badge','text', $locale === 'id' ? 'Sumber Bahan Baku' : 'Raw Material Sourcing'],
                ['title','Title','text', $locale === 'id' ? 'Judul' : 'Title'],
                ['description','Description','textarea', $locale === 'id' ? 'Deskripsi' : 'Description'],
                ['feature_1','Feature 1','text', $locale === 'id' ? 'Fitur 1' : 'Feature 1'],
                ['feature_2','Feature 2','text', $locale === 'id' ? 'Fitur 2' : 'Feature 2'],
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
                ['title','Title','text', $locale === 'id' ? 'Judul' : 'Title'],
                ['subtitle','Subtitle','textarea', $locale === 'id' ? 'Subjudul' : 'Subtitle'],
            ]);


            for($i=1;$i<=4;$i++){

                $this->createItems($loop->id,[
                    ["step_{$i}_title","Step {$i} Title",'text', $locale === 'id' ? "Langkah {$i}" : "Step {$i}"],
                    ["step_{$i}_description","Step {$i} Description",'textarea', $locale === 'id' ? "Deskripsi Langkah {$i}" : "Step {$i} Description"],
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