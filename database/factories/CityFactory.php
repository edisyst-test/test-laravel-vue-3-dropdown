<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'country_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
