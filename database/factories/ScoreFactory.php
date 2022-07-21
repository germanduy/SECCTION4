<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;
use App\Models\Student;

class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subjects = Subject::all()->pluck('sbid')->toArray();
        $students = Student::all()->pluck('sid')->toArray();
        return [
            "csid"=>$this->faker->unique()->randomNumber(),
            "mark"=>$this->faker->numberBetween(0,99),
            "result"=>$this->faker->randomNumber(),
            "sid"=>$this->faker->randomElement($students),
            "sbid"=>$this->faker->randomElement($subjects)
        ];
    }
}
