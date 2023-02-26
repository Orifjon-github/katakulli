<?php

namespace Database\Seeders;

use App\Models\Homepage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homepage::create([
            'title' => "KATAKULLI",
            'sub_title' => "TURKISH RESTAURANT IN LONDON",
            'image' => "/storage/homepage/homepage-background.jpg",
        ]);
    }
}
