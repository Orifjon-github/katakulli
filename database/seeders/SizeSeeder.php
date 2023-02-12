<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
           'name' => 'Small',
           'size' => 25,
        ]);
        Size::create([
           'name' => 'Medium',
           'size' => 45,
        ]);
        Size::create([
           'name' => 'Large',
           'size' => 75,
        ]);
        Size::create([
           'name' => 'Extra Large',
           'size' => 100,
        ]);
    }
}
