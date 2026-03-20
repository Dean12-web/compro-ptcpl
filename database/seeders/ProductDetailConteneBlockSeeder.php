<?php

namespace Database\Seeders;

use App\Models\ContentBlock;
use App\Models\ContentBlockItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductDetailConteneBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locales = ['en', 'id'];
        foreach ($locales as $locale) {
            $features = ContentBlock::create([
                'key' => 'product_detail_features',
                'block_type' => 'multiple',
                'title' => 'PRODUCT_DETAIL',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true,
            ]);

            for ($i = 1; $i <= 3; $i++) {
                $this->createItem($features->id, [
                    ["feature_{$i}_label", "Feature {$i} Label", 'text'],
                ]);
            }

            $why = ContentBlock::create([
                'key' => 'product_detail_why_choose',
                'block_type' => 'multiple',
                'title' => 'PRODUCT_DETAIL',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true,
            ]);
            $this->createItem($why->id, [
                ['section_title', 'Section Title', 'text'],
                ['section_description', 'Section Description', 'textarea'],
            ]);
            for ($i = 1; $i <= 4; $i++) {
                $this->createItem($why->id, [
                    ["why_{$i}_content_title", "Why {$i} Content Title", 'text'],
                    ["why_{$i}_content_description", "Why {$i} Content Description", 'textarea'],
                ]);
            }
        }
    }

    private function createItem($blockId, $fields)
    {
        $order = 1;
        foreach ($fields as $field) {
            ContentBlockItem::create([
                'block_id' => $blockId,
                'field_key' => $field[0],
                'field_label' => $field[1],
                'field_type' => $field[2],
                'field_value' => null,
                'sort_order' => $order++,
            ]);
        }
    }
}
