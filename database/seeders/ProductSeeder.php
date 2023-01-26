<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(15)->create();
        Product::factory(15)->create(['category_id' => 2]);
        Product::factory(15)->create(['category_id' => 3]);
        Product::factory(15)->create(['category_id' => 4]);
        Product::factory(15)->create(['category_id' => 5]);
        Product::factory(15)->create(['category_id' => 6]);
        Product::factory(15)->create(['category_id' => 7]);
    }
}
