<?php

namespace Database\Seeders;

use App\Models\AdditionalProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdditionalProduct::create([
           'name' => 'Ketchup',
           'price' => 2.99,
           'image' => '/storage/products/ketchup.png'
        ]);
        AdditionalProduct::create([
           'name' => 'Mayonez',
           'price' => 3.99,
           'image' => '/storage/products/ketchup.png'
        ]);
        AdditionalProduct::create([
           'name' => 'Ketchup',
           'price' => 2.99,
           'image' => '/storage/products/ketchup.png'
        ]);
    }
}
