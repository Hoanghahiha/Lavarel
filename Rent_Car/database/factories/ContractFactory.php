<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customer =Customer::all()->pluck("phone")->toArray();
        $car =Car::all()->pluck("carId")->toArray();
        $staff =Staff::all()->pluck("sId")->toArray();
        return [
            "cId"=>$this->faker->unique()->randomNumber(3),
            'phoneCTM'=>$this->faker->randomElement($customer),
            'sId'=>$this->faker->randomElement($staff),
            'carId'=>$this->faker->randomElement($car),
            "startDate" => $this ->faker->date("Y-m-d","2022-02-02"),
            "endDate" => $this ->faker->date("Y-m-d","2022-02-02"),
            "total" => $this-> faker -> randomNumber(4),
            "image" =>"HTTPS://". $this ->faker->randomElement()

        ];
    }
}
