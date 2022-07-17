<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class Student_SubjectFactory extends Factory
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
            "sid"=>$this->faker->randomElement($students),
            "sbid"=>$this->faker->randomElement($subjects)
        ];
    }
}
