<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class ContactContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            HERO SECTION
            */
            $hero = ContentBlock::create([
                'key' => 'contact_hero_section',
                'block_type' => 'single',
                'title' => 'CONTACT',
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
            CONTACT FORM SECTION
            */
            $form = ContentBlock::create([
                'key' => 'contact_form_section',
                'block_type' => 'single',
                'title' => 'CONTACT',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($form->id,[
                ['form_title','Form Title','text'],
                ['submit_button_text','Submit Button Text','text']
            ]);


            /*
            CONTACT INFORMATION
            */
            $info = ContentBlock::create([
                'key' => 'contact_information_section',
                'block_type' => 'single',
                'title' => 'CONTACT',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($info->id,[
                ['office_title','Office Title','text'],
                ['office_address','Office Address','textarea'],

                ['email_title','Email Title','text'],
                ['email_primary','Primary Email','text'],
                ['email_secondary','Secondary Email','text'],

                ['phone_title','Phone Title','text'],
                ['phone_number','Phone Number','text'],
                ['phone_hours','Phone Hours','text'],

                ['map_image','Map Image','image']
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