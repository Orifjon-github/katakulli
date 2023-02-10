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
            'url' => 'path'
        ]);
        Category::create([
            'name' => 'Burgers',
            'url' => 'path'
        ]);
        Category::create([
            'name' => 'Doners',
            'url' => 'path'
        ]);
        Category::create([
            'name' => 'Vegetarian & Salad',
            'url' => 'path'
        ]);

    }
}
