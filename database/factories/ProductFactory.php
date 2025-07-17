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
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Wireless Mouse',
                'Mechanical Keyboard',
                '4K Monitor',
                'Bluetooth Headphones',
                'Smart Watch'
            ]),
            'price' => fake()->randomFloat(2, 250, 750),
            'description' => fake()->paragraph()
        ];
    }
}
