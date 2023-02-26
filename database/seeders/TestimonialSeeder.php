<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
           'name' => "Naushed Reza",
           'body' => 'Our new favourite place to order pizza from! Can recommend enough! Very friendly staff, delivery is always on time, and most importantly, amazing pizzas. I would recommend  the Chicken Classic and the Vegetarian pizzas. Vegetarian options: Vegetarian Pizza',
            'published' => "02.02.2023",
            'image' => '/storage/homepage/users/user-1.png'
        ]);
        Testimonial::create([
            'name' => "Anca Pertu",
            'body' => 'Friendly staff, fast service and amazing pizza, ordered once and kept coming back. Highly recommend! 💕',
            'published' => "02.02.2023",
            'image' => '/storage/homepage/users/user-1.png'
        ]);
        Testimonial::create([
            'name' => "Elenora Zeneli",
            'body' => 'Amazing good pizzas for a good price as well! Very friendly too, def recommend!',
            'published' => "02.02.2023",
            'image' => '/storage/homepage/users/user-1.png'
        ]);
        Testimonial::create([
            'name' => "Edvin",
            'body' => 'Very nice Pizzeria, chef\'s works nice and clean, possible to get any pizza up to you as example I prefer tiny and crispy, so 5 Star ⭐️ ⭐️ ⭐️ ⭐️ ⭐️, recommend.',
            'published' => "02.02.2023",
            'image' => '/storage/homepage/users/user-1.png'
        ]);
    }
}
