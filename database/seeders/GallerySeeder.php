<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
           'image' => '/storage/homepage/gallery/image-1.jpg'
        ]);
        Gallery::create([
           'image' => '/storage/homepage/gallery/image-2.jpg'
        ]);
        Gallery::create([
           'image' => '/storage/homepage/gallery/image-3.jpg'
        ]);
        Gallery::create([
            'image' => '/storage/homepage/gallery/image-4.jpg'
        ]);
        Gallery::create([
            'image' => '/storage/homepage/gallery/image-5.jpg'
        ]);
    }
}
