<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Score;
use Database\Factories\StudentFactory;
use Database\Factories\SubjectFactory;
use Database\Factories\ScoreFactory;
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
//        // User::factory(10)->create();
//        Classes::factory(10)->create();
//        Subject::factory(50)->create();
//        Student::factory(50)->create();
        Score::factory(20)->create();
    }
}
