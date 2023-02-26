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
            'phone' => '+0 (555) 123 45 67',
            'address' => 'Callison Laney Buoy BuildingW 13th Parks Suite 559, Denver',
            'map' => 'https://www.google.com/maps/place/3+Charleville+Rd,+London+W14+9JL,+UK/@51.4891323,-0.2082222,17z/data=!3m1!4b1!4m6!3m5!1s0x48760f94050d9fa7:0x58e031d4d14b73ea!8m2!3d51.489129!4d-0.2060335!16s%2Fg%2F11c24k9034',
            'iframe_url' => 'https://youtu.be/sv3TXMSv6Lw'
            ]);
    }
}
