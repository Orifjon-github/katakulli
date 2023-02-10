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
            'name' => 'telegram',
            'url' => 'https://t.me/orifjon_oripov',
            'icon' => 'svg',
        ]);
    }
}
