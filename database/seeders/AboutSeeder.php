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
                "Our Chef and Staff
                    Dine in and take out
                    Dine in and take out
                    With 20 years of experience cooking in the finest restaurants, our chef is excited to present their vision to you and all our guests. Our caring and committed staff make sure you have a fantastic experience with us.",
                "Dine in and take out We have worked to package our meals in a way that lets you bring the quality of our meals into your home. We always love to see you in person, but even when we can't we ensure that your dining experience is top notch!",
            ]),
            'long_text' => serialize([
                'Our Chef and Staff
Dine In or Take Out
Dine In or Take Out
With 20 years of experience cooking in the finest restaurants, our chef is excited to present their vision to you and all our guests. Our caring and committed staff make sure you have a fantastic experience with us.',
                'Dine in and take out
We have worked to package our meals in a way that lets you bring the quality of our meals into your home. We always love to see you in person, but even when we can\'t we ensure that your dining experience is top notch!'
            ]),
            'image' => "/storage/homepage/about.jpg"
        ]);
    }
}
