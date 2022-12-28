<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\brand>
 */
class brandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'brand' => fake()->company(),
            'product' => fake()->domainName(),
            'payment' => fake()->creditCardType(),
        ];
    }
}
