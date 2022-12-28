<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test>
 */
class testFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => fake()->name(),
            'age' => fake()->numerify('##'),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),

        ];
    }
}
