<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => 1,
            'name' => 'Venise Pizza',
            'description' => 'description',
            'image' => 'Example image',
            'price_small' => 5,
            'price_medium' => 7,
            'price_large' => 10,
            'count' => 0,
            'time' => 32,
            'sub_title' => 'popular'
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Venise Pizza',
            'description' => 'description',
            'image' => 'Example image',
            'price_small' => 5,
            'price_medium' => 7,
            'price_large' => 10,
            'count' => 0,
            'time' => 32,
            'sub_title' => null
        ]);
    }
}
