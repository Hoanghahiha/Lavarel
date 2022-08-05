<?php

namespace Database\Factories;

use App\Models\Classes;
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
            "id"=>"ST".$this->faker->randomNumber(),
            "name"=>$this->faker->firstName,
            "age"=>$this->faker->randomNumber(),
            "address"=>$this->faker->address,
            "telephone"=>"0". $this->faker->unique()->randomNumber(9),
        ];
    }
}
