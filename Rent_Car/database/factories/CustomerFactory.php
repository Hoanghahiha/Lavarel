<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "phone"=>"0". $this->faker->unique()->randomNumber(9),
            "name" =>$this->faker->name,
            "address" =>$this->faker->address,
            "birthday" => $this ->faker->date("Y-m-d","2000-01-01")
        ];
    }
}
