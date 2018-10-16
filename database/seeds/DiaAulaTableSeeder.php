<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaAulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dia_aula')->insert(
            [
                [
                    'id' => 1,
                    'materia' => 2,
                    'dia' => new DateTime('2018-11-11'),
                    'aulas_dadas' => 4,
                    'observacao' => 'nenhuma'
                ],
                [
                    'id' => 2,
                    'materia' => 1,
                    'dia' => new DateTime('2018-10-23'),
                    'aulas_dadas' => 2,
                    'observacao' => 'nenhuma'
                ]
            ]
        );
    }
}
