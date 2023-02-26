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
            'name' => 'Salads'
        ]);
        Category::create([
            'name' => 'Appetizers'
        ]);
        Category::create([
            'name' => 'Soups'
        ]);
        Category::create([
            'name' => 'Bruschettas'
        ]);
        Category::create([
            'name' => 'Fowl'
        ]);
        Category::create([
            'name' => 'Hot dishes'
        ]);
        Category::create([
            'name' => 'Desserts'
        ]);

    }
}
