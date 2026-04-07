<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([

            'name' => 'John Smith',
            'company' => 'Global Trading Ltd',
            'country' => 'USA',

            'message' => [
                'en' => 'High quality egg trays and very reliable supplier for export.',
                'id' => 'Kualitas egg tray sangat bagus dan supplier terpercaya.',
            ],

            'is_active' => true,
            'sort_order' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Testimonial::create(
            [
                'name' => 'Yuki Tanaka',
                'company' => 'Nippon Foods',
                'country' => 'Japan',

                'message' => [
                    'en' => 'High quality egg trays and very reliable supplier for export.',
                    'id' => 'Kualitas egg tray sangat bagus dan supplier terpercaya.',
                ],

                'is_active' => true,
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        Testimonial::create(
            [
                'name' => 'Ahmed Hassan',
                'company' => 'ME Packaging',
                'country' => 'UAE',

                'message' => [
                    'en' => 'High quality egg trays and very reliable supplier for export.',
                    'id' => 'Kualitas egg tray sangat bagus dan supplier terpercaya.',
                ],

                'is_active' => true,
                'sort_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
