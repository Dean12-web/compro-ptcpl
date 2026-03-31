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
                ['phone_hours','Phone Hours','text', $locale === 'id' ? 'Senin - Jumat, 08:00 - 17:00 WIB' : 'Monday - Friday, 8:00 AM - 5:00 PM WIB'],
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
                'field_value' => $field[3] ?? null,
                'sort_order' => $order++
            ]);

        }
    }
}