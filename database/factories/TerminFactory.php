<?php

namespace Database\Factories;

use App\Models\Frizer;
use App\Models\Frizura;
use Illuminate\Database\Eloquent\Factories\Factory;

class TerminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'frizer_id' => $this->faker->numberBetween($min = 1, $max = Frizer::count()),
            'frizura_id' => $this->faker->numberBetween($min = 1, $max = Frizura::count()),
            'datum' =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'vreme' => $this->faker->time($format = 'H:i', $max = 'now')
            
        ];
    }
}
