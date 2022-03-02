<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->city(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
