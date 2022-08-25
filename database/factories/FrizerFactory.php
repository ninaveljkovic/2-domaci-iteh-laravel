<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FrizerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->LastName(),
            'godine_iskustva' =>  $this->faker->numberBetween($min = 1, $max = 40),
            'rang' => $this->faker->numberBetween($min = 1, $max = 5),
            'kontakt' =>  $this->faker->phoneNumber() ,
        ];
    }
}
