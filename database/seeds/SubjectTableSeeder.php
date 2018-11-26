<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(
            [
                [
                    'id' => 1,
                    'name' => "SSI",
                    'course' => 1,
                    'semester' => 1,
                    'starts_at' => "19:00:00",
                    'ends_at' => "22:30:00",
                    'qty_classes' => 4,
                    'professor' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
