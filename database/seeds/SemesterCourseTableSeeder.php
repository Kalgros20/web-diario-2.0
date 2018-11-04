<?php

use Illuminate\Database\Seeder;

class SemesterCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semester_course')->insert(
            [
                [
                    'id' => 1,
                    'semester' => 1,
                    'course' => 1,
                ],
                [
                    'id' => 2,
                    'semester' => 2,
                    'course' => 2,
                ],
            ]
        );
    }
}
