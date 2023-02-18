<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Pizza',
            'url' => '/storage/homepage/categories/pizza.svg'
        ]);
        Category::create([
            'name' => 'Lasagna',
            'url' => '/storage/homepage/categories/lasagna.png'
        ]);
        Category::create([
            'name' => 'Make it better',
            'url' => '/storage/homepage/categories/pizza.svg'
        ]);
        Category::create([
            'name' => 'Salad',
            'url' => '/storage/homepage/categories/vegetarian.svg'
        ]);
        Category::create([
            'name' => 'Sauce',
            'url' => '/storage/homepage/categories/sous.png'
        ]);
        Category::create([
            'name' => 'Drink',
            'url' => '/storage/homepage/categories/drink.png'
        ]);

    }
}
