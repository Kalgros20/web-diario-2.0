<?php

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
         $this->call(RolesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(CoursesTableSeeder::class);
         $this->call(ProfessorTableSeeder::class);
         $this->call(OccurrencesTableSeeder::class);
         $this->call(DiaAulaTableSeeder::class);
         $this->call(PeriodTableSeeder::class);
         $this->call(SubjectTableSeeder::class);
    }
}
