<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->company(),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()-> now()->format('Y-m-d') . ' ' . fake()->time(),
            'arrival_time' => fake()-> now()->format('Y-m-d') . ' ' . fake()->time(),
            'train_code' => strtoupper($this->faker->lexify('?????')),
            'train_carriages' => fake()->randomDigitNotNull(),
            'in_time' => fake()->boolean(),
            'cancelled' => fake()->boolean(),
        ];
    }
}
