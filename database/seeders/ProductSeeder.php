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
            'main_image' => '/storage/products/product-1.jpg',
            'single_images' => serialize([
                'image_1' => '/storage/products/product-1.jpg'
            ]),
            'short_description' => "Tomatoes, cucumbers, red onion, lettuce",
            'long_description' => "Tomatoes, cucumbers, red onion, lettuce (long description)",
            'price' => 788
        ]);
        Product::create([
            'category_id' => 1,
            'name' => "Salad “Camembert”",
            'main_image' => '/storage/products/product-1.jpg',
            'single_images' => serialize([
                'image_1' => '/storage/products/product-1.jpg'
            ]),
            'short_description' => "Tomatoes, cucumbers, red onion, lettuce",
            'long_description' => "Tomatoes, cucumbers, red onion, lettuce (long description)",
            'price' => 980
        ]);

        Product::create([
            'category_id' => 2,
            'name' => "Chicken Salad",
            'main_image' => '/storage/products/product-1.jpg',
            'single_images' => serialize([
                'image_1' => '/storage/products/product-1.jpg'
            ]),
            'short_description' => "Tomatoes, cucumbers, red onion, lettuce",
            'long_description' => "Tomatoes, cucumbers, red onion, lettuce (long description)",
            'price' => 878
        ])

        ;Product::create([
            'category_id' => 3,
            'name' => "Chicken Salad",
            'main_image' => '/storage/products/product-1.jpg',
            'single_images' => serialize([
                'image_1' => '/storage/products/product-1.jpg'
            ]),
            'short_description' => "Tomatoes, cucumbers, red onion, lettuce",
            'long_description' => "Tomatoes, cucumbers, red onion, lettuce (long description)",
            'price' => 788
        ]);
    }
}
