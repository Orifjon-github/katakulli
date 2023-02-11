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
            'name' => 'Burgers',
            'url' => '/storage/homepage/categories/burger.svg'
        ]);
        Category::create([
            'name' => 'Doners',
            'url' => '/storage/homepage/categories/doner.svg'
        ]);
        Category::create([
            'name' => 'Vegetarian & Salad',
            'url' => '/storage/homepage/categories/vegetarian.svg'
        ]);

    }
}
