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
                    'name' => 'Matutino',
                    'campo' => 'nenhum',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'name' => 'Vespertino',
                    'campo' => 'nenhum',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'name' => 'Noturno',
                    'campo' => 'nenhum',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
