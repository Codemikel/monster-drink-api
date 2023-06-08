<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'user_id' => rand(1, 10),
            'slug' => $this->faker->slug,
            'status' => $this->faker->word,
            'total' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 80000),
        ];
    }
}
