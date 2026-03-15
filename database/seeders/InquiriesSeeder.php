<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InquiriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inquiry::insert([
            [
                'name' => 'John Smith',
                'company' => 'Global Trading Ltd',
                'country' => 'USA',
                'email' => 'john@globaltrading.com',
                'phone' => '+1 555 321 222',
                'message' => 'We are interested in importing egg trays. Please send your quotation and minimum order quantity.',
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Ahmed Hassan',
                'company' => 'Middle East Packaging',
                'country' => 'UAE',
                'email' => 'ahmed@me-packaging.ae',
                'phone' => '+971 55 888 1122',
                'message' => 'Do you export egg trays to Dubai? Kindly send your catalog and shipping details.',
                'is_read' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Yuki Tanaka',
                'company' => 'Nippon Food Supply',
                'country' => 'Japan',
                'email' => 'yuki.tanaka@nipponfoods.jp',
                'phone' => '+81 90 1234 5678',
                'message' => 'We are looking for eco-friendly egg trays supplier for Japanese market.',
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Carlos Ramirez',
                'company' => 'Agro Export Mexico',
                'country' => 'Mexico',
                'email' => 'carlos@agroexport.mx',
                'phone' => '+52 55 3344 2211',
                'message' => 'Please provide your product specification and container capacity.',
                'is_read' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Michael Brown',
                'company' => 'Fresh Farm Australia',
                'country' => 'Australia',
                'email' => 'michael@freshfarm.au',
                'phone' => '+61 412 333 555',
                'message' => 'Interested in long-term cooperation for egg tray supply.',
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
