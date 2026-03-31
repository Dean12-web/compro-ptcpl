<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class ProductContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en','id'];

        foreach ($locales as $locale) {

            /*
            HERO / PAGE HEADER
            */
            $hero = ContentBlock::create([
                'key' => 'products_hero_section',
                'block_type' => 'single',
                'title' => 'PRODUCT',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['badge','Badge','text',$locale === 'id' ? 'Produk' : 'Products'],
                ['title','Title','text',$locale === 'id' ? 'Judul Produk' : 'Product Title'],
                ['description','Description','textarea',$locale === 'id' ? 'Deskripsi Produk' : 'Product Description'],
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