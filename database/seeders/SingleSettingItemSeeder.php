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
            'phone' => '+998908319755',
            'address' => 'Wolverhampton, Charles II, Street 47',
            'iframe_url' => 'example iframe_url',
            'partnership_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaa. Augue vivamus sit aliquam in velit volutpat scelerisque at id. Orci cursus egestas adipiscing quis id tempus donecc amet. Facilisi malesuada curabitur vulputate nulla tortor. vulputate adipiscing diam malesuada proin morbi mattiscc vel. Lorem ipsum dolor sit amet, consectetur adipiscing elitaa. Augue vivamus sit aliquam in velit volutpat scelerisque at id. Orci cursus egestas adipiscing quis id tempus donecc amet.  vivamus sit aliquam in velit volutpat scelerisque at id. Orci cursus egestas adipiscing quis id tempus donecc amet.  ',
        ]);
    }
}
