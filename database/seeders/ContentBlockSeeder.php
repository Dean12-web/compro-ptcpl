<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class ContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            |----------------------------------
            | HERO SECTION
            |----------------------------------
            */
            $hero = ContentBlock::create([
                'key' => 'home_hero_section',
                'block_type' => 'single',
                'title' => 'HOME',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['badge','Badge','text', $locale === 'id' ? 'Badge' : 'Badge'],
                ['title','Title','text', $locale === 'id' ? 'Title' : 'Title'],
                ['description','Description','textarea', $locale === 'id' ? 'Description' : 'Description'],
                ['hero_image','Hero Image','image'],
            ]);


            /*
            |----------------------------------
            | HIGHLIGHTS / STATS
            |----------------------------------
            */
            $highlight = ContentBlock::create([
                'key' => 'home_highlights_section',
                'block_type' => 'multiple',
                'title' => 'HOME',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            for($i=1;$i<=3;$i++){

                $this->createItems($highlight->id,[
                    ["item_{$i}_title","Item {$i} Title",'text', $locale === 'id' ? "Item {$i} Title" : "Item {$i} Title"],
                    ["item_{$i}_value","Item {$i} Value",'text', $locale === 'id' ? "Item {$i} Value" : "Item {$i} Value"],
                    ["item_{$i}_description","Item {$i} Description",'text', $locale === 'id' ? "Item {$i} Description" : "Item {$i} Description"]
                ]);
            }


            /*
            |----------------------------------
            | GLOBAL REACH
            |----------------------------------
            */
            $global = ContentBlock::create([
                'key' => 'home_global_reach_section',
                'block_type' => 'single',
                'title' => 'HOME',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($global->id,[
                ['title','Title','text', $locale === 'id' ? 'Jangkauan Global, Solusi Lokal' : 'Global Reach, Local Solutions'],
                ['description','Description','textarea', $locale === 'id' ? 'Kami memiliki jangkauan global dengan solusi yang disesuaikan untuk kebutuhan lokal Anda.' : 'We have a global reach with solutions tailored to your local needs.'],
            ]);


            /*
            |----------------------------------
            | CONTACT CTA
            |----------------------------------
            */
            $contact = ContentBlock::create([
                'key' => 'contact_cta_section',
                'block_type' => 'single',
                'title' => 'HOME',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($contact->id,[
                ['title','Title','text',$locale === 'id' ? 'Hubungi Kami' : 'Contact Us'],
                ['description','Description','textarea', $locale === 'id' ? 'Kami siap membantu Anda dengan pertanyaan atau permintaan informasi lebih lanjut.' : 'We are here to assist you with any questions or further information you may need.'],
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