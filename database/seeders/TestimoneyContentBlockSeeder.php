<?php

namespace Database\Seeders;

use App\Models\ContentBlock;
use App\Models\ContentBlockItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Mail\Mailables\Content;

class TestimoneyContentBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locales = ['en', 'id'];

        foreach ($locales as $locale) {
            /*
            HERO SECTION
            */
            $hero = ContentBlock::create([
                'key' => 'testimony_hero',
                'block_type' => 'single',
                'title' => 'TESTIMONY',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id,[
                ['badge','Badge','text', $locale === 'id' ? 'Testimony' : 'Testimoni'],
                ['title', 'Title', 'text', $locale === 'id' ? 'Kemitraan dan Kepercayaan Global' : 'Global Partnerships & Trust'],
                ['description', 'Description', 'textarea', $locale === 'id' ? 'Sebagai PT CPL, kami menjembatani kesenjangan antara inovasi industri dan logistik unggas global. Komitmen kami terhadap solusi baki telur yang direkayasa dengan presisi telah membuat kami mendapatkan kepercayaan dari produsen unggas tingkat atas di enam benua.': 'As PT CPL, we bridge the gap between industrial innovation and global poultry logistics. Our commitment to precision-engineered egg tray solutions has earned us the trust of tier-1 poultry producers across six continents.'],
                ['hero_image',  'Hero Image','image']
            ]);

            /*
                Testimony content
            */
            $TestimonyContent = ContentBlock::create([
                'key' => 'testimony_content',
                'block_type' => 'single',
                'title' => 'TESTIMONY',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($TestimonyContent->id,[
                ['title', 'Title', 'text', $locale === 'id' ? 'Presisi dalam Setiap Suara':'Precision in Every Voice' ],
                ['subtitle', 'Subtitle', 'text', $locale === 'id' ? 'Bukti keandalan kami, yang disampaikan melalui pengalaman mitra distribusi internasional dan spesialis pengadaan kami.': 'Evidence of our reliability, delivered through the experiences of our international distribution partners and procurement specialists.']
            ]);

            /*
                Testimony CTA
            */

            $cta = ContentBlock::create([
                'key' => 'testimony_cta',
                'block_type' => 'single',
                'title'=> 'TESTIMONY',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($cta->id,[
                ['title', 'Title', 'text', $locale === 'id' ? 'Bergabunglah dengan Jaringan Global Kami': 'Join Our Global Network'],
                ['subtitle', 'Subtitle', 'text', $locale === 'id' ? 'Siap meningkatkan standar pengemasan unggas Anda? Bermitra dengan PT CPL untuk solusi rekayasa presisi yang disesuaikan untuk ekspor global.':'Ready to elevate your poultry packaging standards? Partner with PT CPL for precision-engineered solutions tailored for global export.']
            ]);
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
