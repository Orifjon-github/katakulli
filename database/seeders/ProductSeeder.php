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
        for ($i = 0; $i < 10; $i++) {
            $product = Product::create([
                'category_id' => 1,
                'name' => 'Venice Pizza',
                'description' => 'description',
                'image' => '/storage/products/product-1.png',
                'price_small' => 5,
                'price_medium' => 7,
                'price_large' => 10,
                'count' => 0,
                'time' => 32,
                'sub_title' => 'popular'
            ]);
            for ($b = 1; $b < 4; $b++) {
                $product->sizes()->attach($b);
            }
        }
    }
}
