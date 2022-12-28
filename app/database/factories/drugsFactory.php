<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class drugsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item' => fake()->name(),
            'stock' => fake()->numerify('###'),
            'notic' => fake()->paragraph(),
            'created_at' => fake()->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
