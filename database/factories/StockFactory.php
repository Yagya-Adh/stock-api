<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'script' => $this->faker->company(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'last_trade_price' => $this->faker->randomFloat(2, 10, 100),
            'day_low' => $this->faker->randomFloat(2, 10, 100),
            'day_high' => $this->faker->randomFloat(2, 10, 100),
            'open_price' => $this->faker->randomFloat(2, 10, 100),
            'close_price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
