<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Settings\SingleSettingItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           SettingSeeder::class,
           LogoSeeder::class,
           SingleSettingItemSeeder::class,
           AdvantageSeeder::class,
           SocialSeeder::class,
           CategorySeeder::class,
           HomepageSeeder::class,
           ProductSeeder::class,
           TestimonialSeeder::class,
           GallerySeeder::class,
           AboutSeeder::class
       ]);
    }
}
