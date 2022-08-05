<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Score;
use App\Models\Student;
use App\Models\Student_Subject;
use App\Models\Subject;
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
        Student::factory(50)->create();
    }
}
