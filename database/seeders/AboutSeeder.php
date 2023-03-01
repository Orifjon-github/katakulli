<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'short_text' => serialize([
                'text_1' => "Lorem ipsum dolor sit amet consectetur. Nulla id viverra aenean libero. Odio netus enim arcu augue.",
                'text_2' => "Porta quisque enim nunc tortor sed sed imperdiet. Nibh accumsan feugiat orci fames venenatis tellus lobortis.",
            ]),
            'long_text' => serialize([
                'text_1' => 'Long Text'
            ]),
            'image' => "storage/homepage/about.jpg"
        ]);
    }
}
