<?php

namespace Database\Factories;

use App\Models\crime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class crimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\crime::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'crime_id'=>$this->faker->randomNumber(),
            'crime_description'=>$this->faker->paragraph(),
            'officer_id'=>$this->faker->name(),

        ];
    }
}
