<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            "scid"=>$this->faker->unique()->randomNumber(),
            "math"=>$this->faker->randomNumber(),
            "result"=>$this->faker->randomNumber(),
            "sid"=>$this->faker->randomElement($students),
            "sbid"=>$this->faker->randomElement($subjects)
        ];
    }
}
