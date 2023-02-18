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
            ["category_id" => 1, "name" => "Bbq Chicken Classic Pizza", "description" => "Bbq chicken, red onion, bacon and bbq sauce"],
            ["category_id" => 1, "name" => "Chicken Supreme Pizza", "description" => "Plain chicken, mushroom, pepper and sweetcorn"],
            ["category_id" => 1, "name" => "Pepperoni Lover Pizza", "description" => "Double cheese and double pepperoni"],
            ["category_id" => 1, "name" => "Pepperoni Plus Pizza", "description" => "Red onion, mushroom and pepperoni"],
            ["category_id" => 1, "name" => "Chicken Tandoori Pizza", "description" => "Chicken tandoori, mushroom, onion, jalapeno and fresh tomato"],
            ["category_id" => 1, "name" => "Four Seasons Pizza", "description" => "Mushroom, pepperoni, ham and pepper"],
            ["category_id" => 1, "name" => "Meat Feast Pizza", "description" => "Pepperoni, ham, spicy beef, bacon and smoked sausage"],
            ["category_id" => 1, "name" => "Siciliano Pizza", "description" => "Ham, capers, anchovies, black olive, artichoke"],
            ["category_id" => 1, "name" => "Classic Pizza", "description" => "Mushroom, bacon and fresh tomato"],
            ["category_id" => 1, "name" => "Mexican Pizza", "description" => "Red onion, spicy beef, pepper and jalapeno"],
            ["category_id" => 1, "name" => "Chicken Club Pizza", "description" => "Chicken tikka, red onion, bacon and fresh tomato"],
            ["category_id" => 1, "name" => "Sausage and Pepperoni Pizza", "description" => "Pepperoni and smoked sausage"],
            ["category_id" => 1, "name" => "Four Cheese Pizza", "description" => "Mozarella, parmesan, feta cheese and plain cheese"],
            ["category_id" => 1, "name" => "Veggie Lover Pizza", "description" => "Mushroom, red onion, pepper, sweetcorn and fresh tomato"],
            ["category_id" => 1, "name" => "Vegetarian Hot Pizza", "description" => "Mushroom, red onion, pepper, green chilli, jalapeno and fresh tomato"],
            ["category_id" => 1, "name" => "Cheesy Delight Pizza", "description" => "Red onion, black olives, fresh tomatoes, feta cheese"],
            ["category_id" => 1, "name" => "Seafood Pizza", "description" => "Tuna, prawns, anchovies and fresh tomato"],
            ["category_id" => 1, "name" => "Spicy Pizza", "description" => "Red onion, spicy beef, pepperoni, chilli and jalapeno"],
            ["category_id" => 1, "name" => "The Works Pizza", "description" => "Mushroom, ham, pepperoni, smoked sausage, black olives and peppers"],
            ["category_id" => 1, "name" => "Build Your Own Pizza", "description" => "Any 4 Toppings"],
//            ["category_id" => 1, "name" => "", "description" => ""],

            ];
        foreach ($pizzas as $pizza) {
            Product::create([
                'category_id' => $pizza["category_id"] ?? 1,
                'name' => $pizza["name"] ?? "Pizza",
                'description' => $pizza["description"] ?? "Very tasty",
                'image' => $pizza["image"] ?? '/storage/products/product-1.png',
                'size' => serialize([["id" => 1, "name" => "Small", "size" => 10, "price" => 9.99], ["id" => 2, "name" => "Medium","size" => 12, "price" => 12.99], ["id" => 3, "name" => "Large", "size" => 14, "price" => 14.99], ["id" => 4, "name" => "Extra Large", "size" => 15, "price" => 17.99]]),
                'count' => 0,
                'time' => $pizza["time"] ?? 30,
                'sub_title' => $pizza["sub_title"] ?? null
            ]);
        }

//        for ($i = 0; $i < 5; $i++) {
//           Product::create([
//                'category_id' => 2,
//                'name' => 'Venice Pizza',
//                'description' => 'description',
//                'image' => '/storage/products/product-1.png',
//               'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
//               'count' => 0,
//                'time' => 32,
//                'sub_title' => 'popular'
//            ]);
//        }
//
//        for ($i = 0; $i < 5; $i++) {
//           Product::create([
//                'category_id' => 3,
//                'name' => 'Venice Pizza',
//                'description' => 'description',
//                'image' => '/storage/products/product-1.png',
//               'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
//                'count' => 0,
//                'time' => 32,
//                'sub_title' => 'popular'
//            ]);
//        }
//
//        for ($i = 0; $i < 5; $i++) {
//            Product::create([
//                'category_id' => 4,
//                'name' => 'Venice Pizza',
//                'description' => 'description',
//                'image' => '/storage/products/product-1.png',
//                'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
//                'count' => 0,
//                'time' => 32,
//                'sub_title' => 'popular'
//            ]);
//        }
//        for ($i = 0; $i < 5; $i++) {
//            Product::create([
//                'category_id' => 5,
//                'name' => 'Ketchup',
//                'description' => 'description',
//                'image' => '/storage/products/ketchup.png',
//                'size' => serialize([["id" => 1, "name" => "Small", "size" => 25, "price" => 5.55], ["id" => 2, "name" => "medium","size" => 45, "price" => 9.55], ["id" => 3, "name" => "large", "size" => 75, "price" => 12.55]]),
//                'count' => 0,
//                'time' => 32,
//                'sub_title' => 'popular'
//            ]);
//        }

    }
}
