<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Contract;
use App\Models\Customer;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Customer::factory(50)->create();
        //Staff::factory(10)->create();
        //Car::factory(50)->create();
        Contract::factory(50)->create();
    }
}
