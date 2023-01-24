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
            'name' => 'Maishiy texnika',
            'file_url' => 'path'
        ]);
        Category::create([
            'name' => 'Avtomobil uchun mahsulotlar',
            'file_url' => 'path'
        ]);
        Category::create([
            'name' => 'Telefonlar va gadjetlar',
            'file_url' => 'path'
        ]);
        Category::create([
            'name' => 'Kompyuter texnikasi',
            'file_url' => 'path'
        ]);
        Category::create([
            'name' => "Sport va sevimli mashg'ulot",
            'file_url' => 'path'
        ]);
        Category::create([
            'name' => 'Bolalar uchun mahsulotlar',
            'file_url' => 'path'
        ]);
        Category::create([
            'name' => "Go'zallik va salomatlik",
            'file_url' => 'path'
        ]);
    }
}
