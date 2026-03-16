<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'company_name' => 'PT Cendana Putera Lestari',
            'company_email' => 'info@ptcpl.com',
            'company_phone' => '+62 812 7129 9825',
            'whatsapp' => '+6281271299825',
            'company_address' => 'Jalan Batang Kuis no 8A, Telaga Sari, Kec. Tanjung Morawa, Kabupaten Deli Serdang, Sumatera utara, 20362',
            'facebook' => 'https://facebook.com/ptcpl',
            'instagram' => 'https://instagram.com/ptcpl',
            'linkedin' => 'https://linkedin.com/company/ptcpl',
            'google_maps' => 'https://maps.google.com'
        ]);
    }
}
