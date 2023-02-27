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
            'name' => "Salad “healthy summer”",
            'description' => "Tomatoes, cucumbers, red onion, lettuce",
            'image' => '/storage/products/product-1.png',
            'price' => 788
        ]);
        Product::create([
            'category_id' => 1,
            'name' => "Salad “Camembert”",
            'description' => "Tomatoes, microgreens, Camembert cheese",
            'image' => '/storage/products/product-1.png',
            'price' => 980
        ]);
        Product::create([
            'category_id' => 2,
            'name' => "Chicken Salad",
            'description' => "Tomatoes, cucumbers, red onion, lettuce",
            'image' => '/storage/products/product-1.png',
            'price' => 788
        ]);
        Product::create([
            'category_id' => 2,
            'name' => "Salad “healthy summer”",
            'description' => "Tomatoes, cucumbers, red onion, lettuce",
            'image' => '/storage/products/product-1.png',
            'price' => 788
        ]);
        Product::create([
            'category_id' => 3,
            'name' => "Salad “healthy summer”",
            'description' => "Tomatoes, cucumbers, red onion, lettuce",
            'image' => '/storage/products/product-1.png',
            'price' => 788
        ]);
    }
}
