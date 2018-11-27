<?php

use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert(
            [
                [
                    'id' => 1,
                    'year' => date('Y'),
                    'half_year' => 1,
                ],
                [
                    'id' => 2,
                    'year' => date('Y'),
                    'half_year' => 2,
                ],
            ]
        );
    }
}
