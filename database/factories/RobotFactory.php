<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RobotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'robot_name' => $this->faker->name(),
            'robotId' => Str::random(6),
            'robot_rental_price' => 5000,
            'robot_quantity' => 3,
        ];
    }
}
