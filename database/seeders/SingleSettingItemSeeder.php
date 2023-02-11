<?php

namespace Database\Seeders;

use App\Models\Settings\SingleSettingItem;
use Illuminate\Database\Seeder;

class SingleSettingItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SingleSettingItem::create([
            'setting_id' => 1,
            'phone' => '020 7610 2222',
            'address' => '3 Charleville Rd, London W14 9JL',
            'map' => 'https://goo.gl/maps/FLjCp3AoN5Nbh8VV6',
            'iframe_url' => 'https://youtu.be/sv3TXMSv6Lw',
            'image' => '/storage/homepage/setting/setting-image.png',
            'partnership_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaa. Augue vivamus sit aliquam in velit volutpat scelerisque at id. Orci cursus egestas adipiscing quis id tempus donecc amet. Facilisi malesuada curabitur vulputate nulla tortor. vulputate adipiscing diam malesuada proin morbi mattiscc vel. Lorem ipsum dolor sit amet, consectetur adipiscing elitaa. Augue vivamus sit aliquam in velit volutpat scelerisque at id. Orci cursus egestas adipiscing quis id tempus donecc amet.  vivamus sit aliquam in velit volutpat scelerisque at id. Orci cursus egestas adipiscing quis id tempus donecc amet.  ',
        ]);
    }
}
