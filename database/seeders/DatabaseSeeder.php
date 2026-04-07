<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       $this->call([
            AboutContentBlockSeeder::class,
            ContactContentBlockSeeder::class,
            ContentBlockSeeder::class,
            ExportContentBlockSeeder::class,
            GalleryContentBlockSeeder::class,
            InquiriesSeeder::class,
            ProductContentBlockSeeder::class,
            ProductDetailConteneBlockSeeder::class,
            ProductionContentBlockSeeder::class,
            SettingSeeder::class,
            SustainabilityContentBlockSeeder::class,
            UserSeeder::class,
            TestimonialSeeder::class,
         ]);
    }
}
