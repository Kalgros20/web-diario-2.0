<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Matutino'
                ],
                [
                    'id' => 2,
                    'name' => 'Vespertino'
                ],
                [
                    'id' => 3,
                    'name' => 'Noturno'                   
                ]
            ]
        );
    }
}
