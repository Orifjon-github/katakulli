<?php

namespace Database\Seeders;

use App\Models\Settings\Logo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logo::create([
            'setting_id' => 1,
            'name' => 'Header Logo',
            'file_path' => 'storage/homepage/header-logo.png'
        ]);
        Logo::create([
            'setting_id' => 1,
            'name' => 'Footer Logo',
            'file_path' => 'storage/homepage/footer-logo.png'
        ]);
    }
}
