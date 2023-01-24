<?php

namespace Database\Seeders;

use App\Models\Settings\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phone::create([
            'setting_id' => 1,
            'phone' => '998908319755',
        ]);
    }
}
