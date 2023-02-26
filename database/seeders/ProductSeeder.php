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
    }
}
