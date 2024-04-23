<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CouponCode>
 */
class CouponCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->sentence(3),
            'percent' => $this->faker->randomFloat(2, 0, 100),
            'usage_times' => $this->faker->numberBetween(0, 100),
        ];
    }
}
