<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentBlock;
use App\Models\ContentBlockItem;

class ExportContentBlockSeeder extends Seeder
{
    public function run(): void
    {
        $locales = ['en', 'id'];

        foreach ($locales as $locale) {

            /*
            HERO
            */
            $hero = ContentBlock::create([
                'key' => 'export_hero',
                'block_type' => 'single',
                'title' => 'EXPORT',
                'sort_order' => 1,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($hero->id, [
                ['title', 'Title', 'text', $locale === 'id' ? 'Logistik Global & Keunggulan Ekspor' : 'Global Exports, Local Solutions'],
                ['description', 'Description', 'textarea', $locale === 'id' ? 'Mengirimkan solusi egg tray berkualitas ke 20+ negara dengan standar pengiriman yang andal, efisien, dan aman.' : 'Providing efficient and trusted global logistics solutions for your export needs.'],
                ['hero_image','Hero Image','image'],
            ]);


            /*
            EXPORT STATS
            */
            $stats = ContentBlock::create([
                'key' => 'export_stats',
                'block_type' => 'multiple',
                'title' => 'EXPORT',
                'sort_order' => 2,
                'locale' => $locale,
                'is_active' => true
            ]);

            for ($i = 1; $i <= 3; $i++) {
                $this->createItems($stats->id, [
                    ["stat_{$i}_title", "Stat {$i} Title", 'text', $locale === 'id' ? ["Negara Tujuan", "Volume Ekspor Tahunan", "Waktu Pengiriman Rata-rata"][$i-1] : ["Destination Countries", "Annual Export Volume", "Average Transit Time"][$i-1]],
                    ["stat_{$i}_value", "Stat {$i} Value", 'number',    $i === 1 ? ($locale === 'id' ? '20+' : '20+') : ($i === 2 ? ($locale === 'id' ? '100.000+ Ton' : '100,000+ Tons') : ($locale === 'id' ? '7-14 Hari' : '7-14 Days'))],
                    ["stat_{$i}_description", "Stat {$i} Description", 'text', $locale === 'id' ? ["Negara tujuan utama", "Volume ekspor tahunan", "Waktu pengiriman rata-rata"][$i-1] : ["Main destination countries", "Annual export volume", "Average transit time"][$i-1]],
                ]);
            }


            /*
            EXPORT MARKETS
            */
            $markets = ContentBlock::create([
                'key' => 'export_markets',
                'block_type' => 'single',
                'title' => 'EXPORT',
                'sort_order' => 3,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($markets->id, [
                ['title', 'Title', 'text'],
                ['description', 'Description', 'textarea'],

                ['market_1', 'Market 1', 'text',    $locale === 'id' ? 'Asia' : 'Asia'],
                ['market_2', 'Market 2', 'text', $locale === 'id' ? 'Eropa' : 'Europe'],
                ['market_3', 'Market 3', 'text', $locale === 'id' ? 'Amerika Serikat' : 'United States'],
                ['market_4', 'Market 4', 'text', $locale === 'id' ? 'Australia' : 'Australia'],
            ]);


            /*
            SHIPPING METHODS
            */
            $shipping = ContentBlock::create([
                'key' => 'shipping_methods',
                'block_type' => 'multiple',
                'title' => 'EXPORT',
                'sort_order' => 4,
                'locale' => $locale,
                'is_active' => true
            ]);
            $this->createItems($shipping->id, [
                ["shipping_subtitle", "Shipping Subtitle", 'textarea'],
            ]);
            for ($i = 1; $i <= 3; $i++) {
                $this->createItems($shipping->id, [
                    ["shipping_{$i}_title", "Shipping {$i} Title", 'text',  $locale === 'id' ? "Metode Pengiriman {$i}" : "Shipping Method {$i}"],
                    ["shipping_{$i}_description", "Shipping {$i} Description", 'textarea',  $locale === 'id' ? "Deskripsi untuk metode pengiriman {$i}." : "Description for shipping method {$i}."],
                ]);
            }


            /*
            LEAD TIMES
            */
            $lead = ContentBlock::create([
                'key' => 'lead_times',
                'block_type' => 'multiple',
                'title' => 'EXPORT',
                'sort_order' => 5,
                'locale' => $locale,
                'is_active' => true
            ]);

            for ($i = 1; $i <= 4; $i++) {
                $this->createItems($lead->id, [
                    ["region_{$i}", "Region {$i}", 'text', $locale === 'id' ? ["Asia", "Eropa", "Amerika Serikat", "Australia"][$i-1] : ["Asia", "Europe", "United States", "Australia"][$i-1]],
                    ["ports_{$i}", "Ports {$i}", 'text', $locale === 'id' ? "Pelabuhan utama untuk region {$i}." : "Main ports for region {$i}."],
                    ["transit_time_{$i}", "Transit Time {$i}", 'text', $locale === 'id' ? "Waktu transit untuk region {$i}." : "Transit time for region {$i}."],
                ]);
            }


            $packaging = ContentBlock::create([
                'key' => 'packaging_standards',
                'block_type' => 'multiple',
                'title' => 'EXPORT',
                'sort_order' => 6,
                'locale' => $locale,
                'is_active' => true
            ]);
            $this->createItems($packaging->id, [
                ["packaging_subtitle", "Packaging Subtitle", 'textarea'],
            ]);

            for ($i = 1; $i <= 2; $i++) {
                $this->createItems($packaging->id, [
                    ["packaging_{$i}_image", "Packaging {$i} Image", 'image'],
                    ["packaging_{$i}_title", "Packaging {$i} Title", 'text', $locale === 'id' ? "Standar Kemasan {$i}" : "Packaging Standard {$i}"],
                    ["packaging_{$i}_description", "Packaging {$i} Description", 'textarea', $locale === 'id' ? "Deskripsi untuk standar kemasan {$i}." : "Description for packaging standard {$i}."],
                ]);
            }


            /*
            CTA
            */
            $cta = ContentBlock::create([
                'key' => 'export_cta',
                'block_type' => 'single',
                'title' => 'EXPORT',
                'sort_order' => 7,
                'locale' => $locale,
                'is_active' => true
            ]);

            $this->createItems($cta->id, [
                ['title', 'Title', 'text', $locale === 'id' ? 'Hubungi Kami' : 'Contact Us'],
                ['description', 'Description', 'textarea', $locale === 'id' ? 'Kami siap membantu Anda dengan pertanyaan atau permintaan informasi lebih lanjut.' : 'We are here to assist you with any questions or further information you may need.'],
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
