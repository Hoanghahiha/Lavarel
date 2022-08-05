<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" =>$this->faker->name,
            "age" =>$this->faker->randomNumber(2),
            "address" =>$this->faker->address,
            "telephone" =>"0". $this ->faker->unique()->randomNumber(9)
        ];
    }
}
