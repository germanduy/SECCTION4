<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "cid"=>"TH". $this->faker->unique()->randomNumber(),
            "name" =>$this->faker->unique()->name,
            "room" =>$this->faker->languageCode
        ];
    }
}
