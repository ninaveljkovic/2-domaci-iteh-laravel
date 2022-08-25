<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FrizuraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->firstName(), 
            'vreme' =>  $this->faker->numberBetween($min = 10, $max = 240),
            
        ];
    }
}
