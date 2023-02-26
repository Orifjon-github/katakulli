<?php

namespace Database\Seeders;

use App\Models\Settings\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'setting_id' => 1,
            'name' => 'facebook',
            'url' => 'https://m.facebook.com/venicepizzeriauk/ ',
            'icon' => '/storage/homepage/setting/facebook.svg',
        ]);
        Social::create([
            'setting_id' => 1,
            'name' => 'instagram',
            'url' => 'https://instagram.com/venicepizzeriauk',
            'icon' => '/storage/homepage/setting/instagram.svg',
        ]);
    }
}
