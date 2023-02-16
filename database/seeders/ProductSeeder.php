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
        $pizzas = [
            ["category_id" => 1, "name" => "Margherita Pizza", "description" => "Vegetarian Tomato sauce and mozzarella cheese"],
            ["category_id" => 1, "name" => "Farm House Pizza", "description" => "Tomato sauce, mozzarella cheese, ham and mushroom"],
            ["category_id" => 1, "name" => "Hawaiian Pizza", "description" => "Tomato sauce, mozzarella cheese, ham and pineapple"],
            ["category_id" => 1, "name" => "American Pizza", "description" => "Spicy Red onion, pepperoni, peppers and jalapeno"],
            ["category_id" => 1, "name" => "Beef Eater Pizza", "description" => "Spicy beef, red onion, and mushroom"],
        ];
        foreach ($pizzas as $pizza) {
            Product::create([
                'category_id' => $pizza["category_id"] ?? 1,
                'name' => $pizza["name"] ?? "Pizza",
                'description' => $pizza["description"] ?? "Very tasty",
                'image' => $pizza["image"] ?? '/storage/products/product-1.png',
                'size' => serialize([["id" => 1, "name" => "Small", "size" => 10, "price" => 11.99], ["id" => 2, "name" => "Medium","size" => 12, "price" => 14.99], ["id" => 3, "name" => "Large", "size" => 14, "price" => 16.99], ["id" => 4, "name" => "Extra Large", "size" => 15, "price" => 19.99]]),
                'count' => 0,
                'time' => $pizza["time"] ?? 30,
                'sub_title' => $pizza["sub_title"] ?? null
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

        for ($i = 0; $i < 5; $i++) {
            Product::create([
                'category_id' => 4,
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
                'category_id' => 5,
                'name' => 'Ketchup',
                'description' => 'description',
                'image' => '/storage/products/ketchup.png',
                'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
                'count' => 0,
                'time' => 32,
                'sub_title' => 'popular'
            ]);
        }

    }
}
