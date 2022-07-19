<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "carId"=>"Car". $this->faker->unique()->randomNumber(3),
            "name" =>$this->faker->name,
            "brand" =>$this->faker->city,
            "option" =>$this->faker->randomElement(),
            "status" =>$this->faker->numberBetween(0,1),
            "image" =>"HTTPS://". $this ->faker->randomElement()
            //
        ];
    }
}
