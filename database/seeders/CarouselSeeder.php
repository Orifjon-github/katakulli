<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([
            'title' => "Example Title",
            'image' => "Example Image",
            'price' => 5.05,
        ]);
        Carousel::create([
            'title' => "Example Title",
            'image' => "Example Image",
            'price' => 4.45,
        ]);
        Carousel::create([
            'title' => "Example Title",
            'image' => "Example Image",
            'price' => 8.15,
        ]);
    }
}
