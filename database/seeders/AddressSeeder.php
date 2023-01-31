<?php

namespace Database\Seeders;

use App\Models\Settings\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'setting_id' => 1,
            'address' => 'Uzbekiston, Toshkent sh. Yunusobod t. Minor ko’chasi 22-uy.',
        ]);
    }
}
