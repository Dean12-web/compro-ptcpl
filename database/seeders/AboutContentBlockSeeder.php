<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class AboutContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en', 'id'];

        foreach ($locales as $locale) {

            /*
            HERO ABOUT
            */
            $hero = ContentBlock::create([
                'key' => 'about_hero_section',
                'block_type' => 'single',
                'title' => 'ABOUT',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id, [
                ['badge', 'Badge', 'text', $locale === 'id' ? 'Sejak 1995' : 'Since 1995'],
                ['title', 'Title', 'text', $locale === 'id' ? 'Membangun masa depan manufaktur industri' : 'Building the Future of Industrial Manufacturing'],
                ['hero_image', 'Hero Image', 'image'],
            ]);





            /*
            COMPANY PROFILE
            */
            $profile = ContentBlock::create([
                'key' => 'about_company_profile_section',
                'block_type' => 'single',
                'title' => 'ABOUT',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($profile->id, [
                ['title', 'Title', 'text', $locale === 'id' ? 'Komitmen berkelanjutan pada inovasi dan keunggulan' : 'A Legacy of Innovation and Excellence.'],
                ['description_1', 'Description Paragraph 1', 'textarea', $locale === 'id' ? 'PT CPL berperan di lini terdepan industri manufaktur dengan menyediakan solusi terintegrasi untuk mendukung rantai pasok global. Dalam hampir tiga dekade, kami berkembang dari produsen lokal menjadi mitra industri yang menyeluruh.' : 'PT CPL stands at the forefront of the industrial manufacturing sector, providing integrated solutions that power global supply chains. For nearly three decades, we have evolved from a local parts manufacturer into a comprehensive industrial partner.'],
                ['description_2', 'Description Paragraph 2', 'textarea', $locale === 'id' ? 'Komitmen kami terhadap presisi engineering dan praktik berkelanjutan menjadikan kami mitra terpercaya bagi perusahaan Fortune 500 di sektor aerospace, otomotif, dan energi terbarukan.' : 'Our commitment to precision engineering and sustainable practices has made us a trusted name for Fortune 500 companies across aerospace, automotive, and renewable energy sectors.'],
                ['mission_description', 'Mission Description', 'textarea', $locale === 'id' ? 'Menghasilkan komponen industri presisi dengan pendekatan inovatif yang tetap ramah lingkungan.' : 'To deliver precision-engineered industrial components while minimizing environmental impact through innovative manufacturing.'],
                ['vision_description', 'Vision Description', 'textarea', $locale === 'id' ? 'Menjadi pilihan utama di tingkat global untuk solusi industri berkelanjutan dan tantangan engineering yang kompleks.' : 'To be the global benchmark for sustainable industrial excellence and the first choice for complex engineering challenges.']
            ]);


            /*
            CORE VALUES
            */
            $values = ContentBlock::create([
                'key' => 'about_core_values_section',
                'block_type' => 'multiple',
                'title' => 'ABOUT',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $coreValues = [
                'en' => [
                    'Integrity in Every Process',
                    'Commitment to Innovation',
                    'Sustainable Manufacturing'
                ],
                'id' => [
                    'Integritas dalam setiap proses',
                    'Komitmen terhadap inovasi',
                    'Manufaktur berkelanjutan'
                ]
            ];

            for ($i = 1; $i <= 3; $i++) {

                $this->createItems($values->id, [
                    ["value_{$i}_description", "Value {$i} Description", 'textarea',$coreValues[$locale][$i-1]]
                ]);
            }
        }
    }


    private function createItems($blockId, $fields)
    {
        $order = 1;

        foreach ($fields as $field) {

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
