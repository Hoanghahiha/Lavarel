<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "sId"=>"Staff". $this->faker->unique()->randomNumber(5),
            "name" =>$this->faker->name,
            "address" =>$this->faker->address,
            "birthday" => $this ->faker->date("Y-m-d","2000-01-01"),
            "salary" => $this ->faker->randomNumber(3),
            "phone" =>"0". $this ->faker->unique()->randomNumber(9)
        ];
    }
}
