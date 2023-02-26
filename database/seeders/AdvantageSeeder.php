<?php

namespace Database\Seeders;

use App\Models\Settings\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advantage::create([
            'setting_id' => 1,
            'text' => 'capacity up to 80 people',
            'icon' => '/storage/homepage/setting/advantage-1.svg'
        ]);
        Advantage::create([
            'setting_id' => 1,
            'text' => '2 separate zones for companies of 6-15 people',
            'icon' => '/storage/homepage/setting/advantage-2.svg'
        ]);
        Advantage::create([
            'setting_id' => 1,
            'text' => 'live music from Friday to Sunday',
            'icon' => '/storage/homepage/setting/advantage-3.svg'
        ]);
        Advantage::create([
            'setting_id' => 1,
            'text' => 'private parking',
            'icon' => '/storage/homepage/setting/advantage-4.svg'
        ]);
    }
}
