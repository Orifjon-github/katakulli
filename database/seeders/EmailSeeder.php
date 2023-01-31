<?php

namespace Database\Seeders;

use App\Models\Settings\Email;
use Illuminate\Database\Seeder;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Email::create([
            'setting_id' => 1,
            'email' => 'baymarket@gmail.com',
        ]);
    }
}
