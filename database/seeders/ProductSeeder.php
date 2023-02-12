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
        for ($i = 0; $i < 5; $i++) {
            Product::create([
                'category_id' => 1,
                'name' => 'Venice Pizza',
                'description' => 'description',
                'image' => '/storage/products/product-1.png',
                'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
                'count' => 0,
                'time' => 32,
                'sub_title' => 'popular'
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
           Product::create([
                'category_id' => 2,
                'name' => 'Venice Pizza',
                'description' => 'description',
                'image' => '/storage/products/product-1.png',
               'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
               'count' => 0,
                'time' => 32,
                'sub_title' => 'popular'
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
           Product::create([
                'category_id' => 3,
                'name' => 'Venice Pizza',
                'description' => 'description',
                'image' => '/storage/products/product-1.png',
               'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
                'count' => 0,
                'time' => 32,
                'sub_title' => 'popular'
            ]);
        }

    }
}
