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
            ["name" => "Margherita Pizza", "description" => "Vegetarian Tomato sauce and mozzarella cheese"],
            ["name" => "Farm House Pizza", "description" => "Tomato sauce, mozzarella cheese, ham and mushroom"],
            ["name" => "Hawaiian Pizza", "description" => "Tomato sauce, mozzarella cheese, ham and pineapple"],
            ["name" => "American Pizza", "description" => "Spicy Red onion, pepperoni, peppers and jalapeno"],
            ["name" => "Beef Eater Pizza", "description" => "Spicy beef, red onion, and mushroom"],
            ["name" => "Bbq Chicken Classic Pizza", "description" => "Bbq chicken, red onion, bacon and bbq sauce"],
            ["name" => "Chicken Supreme Pizza", "description" => "Plain chicken, mushroom, pepper and sweetcorn"],
            ["name" => "Pepperoni Lover Pizza", "description" => "Double cheese and double pepperoni"],
            ["name" => "Pepperoni Plus Pizza", "description" => "Red onion, mushroom and pepperoni"],
            ["name" => "Chicken Tandoori Pizza", "description" => "Chicken tandoori, mushroom, onion, jalapeno and fresh tomato"],
            ["name" => "Four Seasons Pizza", "description" => "Mushroom, pepperoni, ham and pepper"],
            ["name" => "Meat Feast Pizza", "description" => "Pepperoni, ham, spicy beef, bacon and smoked sausage"],
            ["name" => "Siciliano Pizza", "description" => "Ham, capers, anchovies, black olive, artichoke"],
            ["name" => "Classic Pizza", "description" => "Mushroom, bacon and fresh tomato"],
            ["name" => "Mexican Pizza", "description" => "Red onion, spicy beef, pepper and jalapeno"],
            ["name" => "Chicken Club Pizza", "description" => "Chicken tikka, red onion, bacon and fresh tomato"],
            ["name" => "Sausage and Pepperoni Pizza", "description" => "Pepperoni and smoked sausage"],
            ["name" => "Four Cheese Pizza", "description" => "Mozarella, parmesan, feta cheese and plain cheese"],
            ["name" => "Veggie Lover Pizza", "description" => "Mushroom, red onion, pepper, sweetcorn and fresh tomato"],
            ["name" => "Vegetarian Hot Pizza", "description" => "Mushroom, red onion, pepper, green chilli, jalapeno and fresh tomato"],
            ["name" => "Cheesy Delight Pizza", "description" => "Red onion, black olives, fresh tomatoes, feta cheese"],
            ["name" => "Seafood Pizza", "description" => "Tuna, prawns, anchovies and fresh tomato"],
            ["name" => "Spicy Pizza", "description" => "Red onion, spicy beef, pepperoni, chilli and jalapeno"],
            ["name" => "The Works Pizza", "description" => "Mushroom, ham, pepperoni, smoked sausage, black olives and peppers"],
            ["name" => "Build Your Own Pizza", "description" => "Any 4 Toppings"],
//            ["category_id" => 1, "name" => "", "description" => ""],

            ];
        foreach ($pizzas as $pizza) {
            Product::create([
                'category_id' => 1,
                'name' => $pizza["name"] ?? "Pizza",
                'description' => $pizza["description"] ?? "Very tasty",
                'image' => $pizza["image"] ?? '/storage/products/product-1.png',
                'size' => serialize([["id" => 1, "name" => "Small", "size" => 10, "price" => 9.99], ["id" => 2, "name" => "Medium","size" => 12, "price" => 12.99], ["id" => 3, "name" => "Large", "size" => 14, "price" => 14.99], ["id" => 4, "name" => "Extra Large", "size" => 15, "price" => 17.99]]),
                'count' => 0,
                'time' => $pizza["time"] ?? 30,
                'sub_title' => $pizza["sub_title"] ?? null
            ]);
        }

        $lasagnas = [
            ["name" => "Vegetarian Lasagna", "price" => serialize([["price" => 7.99]])],
            ["name" => "Beef Lasagna", "price" => serialize([["price" => 7.99]])],
            ["name" => "Spaghetti Bolognese", "price" => serialize([["price" => 7.99]])],
            ["name" => "Chicken Mushroom Pasta", "price" => serialize([["price" => 7.99]])]
        ];

        foreach ($lasagnas as $lasagna) {
           Product::create([
                'category_id' => 2,
                'name' => $lasagna["name"] ?? "Lasagna",
                'description' => 'description',
                'image' => '/storage/products/product-1.png',
                'size' => $lasagna["price"] ?? null,
                'count' => 0,
                'time' => 32,
                'sub_title' => null
            ]);
        }

        $betters = [
            ["name" => "Cheesy Jalapeno Bites", "description" => "Breaded jalapeno and cheese 6pcs", "price" => serialize([["price" => 3.99]])],
            ["name" => "Garlic Bread", "description" => "4pcs", "price" => serialize([["price" => 1.99]])],
            ["name" => "Garlic Bread with Cheese", "description" => "4pcs", "price" => serialize([["price" => 2.99]])],
            ["name" => "Cheesy Garlic Pizza Bread", "description" => "Topped with mozzarella, garlic, and butter sauce", "price" => serialize([["price" => 2.99]])],
            ["name" => "Bbq Chicken Wings", "description" => "8pcs", "price" => serialize([["price" => 3.99]])],
            ["name" => "Large Portion of Chips", "description" => "", "price" => serialize([["price" => 1.99]])],
            ["name" => "Chilli Cheesy Bites", "description" => "8pcs", "price" => serialize([["price" => 3.99]])],
            ["name" => "Hot Wings", "description" => "8pcs", "price" => serialize([["price" => 3.99]])],
            ["name" => "Potato Wedges", "description" => "", "price" => serialize([["price" => 3.99]])],
            ["name" => "Curly Fries", "description" => "", "price" => serialize([["price" => 3.99]])],
            ["name" => "Onion Rings", "description" => "10pcs", "price" => serialize([["price" => 3.99]])],
            ["name" => "Garlic Mushrooms", "description" => "10pcs", "price" => serialize([["price" => 3.99]])],
            ["name" => "Mozzarella Sticks", "description" => "8pcs", "price" => serialize([["price" => 3.99]])],
            ["name" => "Chicken Strips", "description" => "6pcs", "price" => serialize([["price" => 4.99]])],
            ["name" => "Bbq Lamb Ribs", "description" => "", "price" => serialize([["price" => 5.99]])],
            ["name" => "Chicken nuggets", "description" => "10pcs", "price" => serialize([["price" => 3.99]])],
        ];

        foreach ($betters as $better) {
            Product::create([
                'category_id' => 3,
                'name' => $better['name'] ?? "Make it Better",
                'description' => $better["description"] ?? null,
                'image' => '/storage/products/product-1.png',
                'size' => $better["price"] ?? null,
                'count' => 0,
                'time' => 32,
                'sub_title' => null
            ]);
        }

        $salads = [
            ["name" => "Mixed Salad", "price" => serialize([["price" => 2.99]])],
            ["name" => "Potato Salad", "price" => serialize([["price" => 2.99]])],
            ["name" => "Coleslaw", "price" => serialize([["price" => 1.99]])],
            ["name" => "Mixed Salad with Tuna", "price" => serialize([["price" => 2.99]])],
            ["name" => "Mixed Salad with Ham", "price" => serialize([["price" => 2.99]])],
            ["name" => "Mixed Salad with Feta and Olive Oil", "price" => serialize([["price" => 2.99]])],
        ];

        foreach ($salads as $salad) {
            Product::create([
                'category_id' => 4,
                'name' => $salad["name"] ?? "Salad",
                'description' => null,
                'image' => '/storage/products/product-1.png',
                'size' => $salad["price"] ?? null,
                'count' => 0,
                'time' => 32,
                'sub_title' => null
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Product::create([
                'category_id' => 5,
                'name' => 'Ketchup',
                'description' => null,
                'image' => '/storage/products/ketchup.png',
                'size' => serialize([["id" => 1, "name" => "Medium", "size" => 0.005, "price" => 0.55]]),
                'count' => 0,
                'time' => 32,
                'sub_title' => null
            ]);
        }

        $drinks = [
            ["name" => "Coke", "image" => "/storage/products/drinks/cola.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 330, "price" => 1.50], ["id" => 2, "name" => "Large", "size" => 1.5, "price" => 2.50]])],
            ["name" => "Diet coke", "image" => "/storage/products/drinks/coladiet.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 330, "price" => 1.50], ["id" => 2, "name" => "Large", "size" => 1.5, "price" => 2.50]])],
            ["name" => "Fanta", "image" => "/storage/products/drinks/fanta.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 330, "price" => 1.50], ["id" => 2, "name" => "Large", "size" => 1.5, "price" => 2.50]])],
            ["name" => "7 Up", "image" => "/storage/products/drinks/up7.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 330, "price" => 1.50], ["id" => 2, "name" => "Large", "size" => 1.5, "price" => 2.50]])],
            ["name" => "Rubicon mango", "image" => "/storage/products/drinks/rubicon.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 330, "price" => 1.50], ["id" => 2, "name" => "Large", "size" => 1.5, "price" => 2.50]])],
            ["name" => "Dr Pepper", "image" => "/storage/products/drinks/pepper.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 330, "price" => 1.50], ["id" => 2, "name" => "Large", "size" => 1.5, "price" => 2.50]])],
            ["name" => "Pepsi", "image" => "/storage/products/drinks/pepsi.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 330, "price" => 1.50], ["id" => 2, "name" => "Large", "size" => 1.5, "price" => 2.50]])],
            ["name" => "Small Water", "image" => "/storage/products/drinks/water.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 500, "price" => 1.30]])],
            ["name" => "Red Bull", "image" => "/storage/products/drinks/redbull.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 250, "price" => 2.50]])],
            ["name" => "Monster original", "image" => "/storage/products/drinks/monster.png", "size" => serialize([["id" => 1, "name" => "Small", "size" => 500, "price" => 2.99]])],
        ];

        foreach ($drinks as $drink) {
            Product::create([
                'category_id' => 6,
                'name' => $drink['name'] ?? "Drink",
                'description' => null,
                'image' => $drink["image"] ?? '/storage/products/pepsi.png',
                'size' => $drink["size"] ?? null ,
                'count' => 0,
                'time' => 32,
                'sub_title' => null
            ]);
        }

    }
}
