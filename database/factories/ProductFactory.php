<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $price = round(fake()->numberBetween(100000, 10000000), -4);
        $monthly_payment = round($price / 24, -3);
        return [
            'category_id' => 1,
            'name' => 'Samsung CS253 Changyutgich', // fake()->sentence(4),
            'image' => '/storage/homepage/product.png',
            'discount' => fake()->randomElement(array(10,20,30)),
            'price' => $price,
            'amount' => fake()->numberBetween(5, 100),
            'credit_duration' => 24,
            'credit_monthly_payment' => $monthly_payment,
            'content' => fake()->paragraph(10),
        ];
    }
}
