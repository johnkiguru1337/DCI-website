<?php

namespace Database\Factories;

use App\Models\officer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class officerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model =\App\Models\officer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'officer_id' => $this->faker->title(),
            'officer_name' => $this->faker->name(),
            'officer_description' => $this->faker->paragraph(),
            'officer_rank' => $this->faker->paragraph(),
            'armouryvehicle' => $this->faker->paragraph(),
            'indiscipline' => $this->faker->paragraph(),
            'familymembers' => $this->faker->paragraph(),
            'contact' => $this->faker->randomNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'image_path' => $this->faker->name(),
            'user_id' => $this->faker->randomNumber(),
        ];
    }
}
