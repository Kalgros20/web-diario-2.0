<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccurrencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occurrences')->insert(
            [
                [
                    'title' => 'Agressão em sala de aula',
                    'description' => 'O aluno joãozinho agrediu o aluno pedrinho na aula de matematica, pedrinho precisou de cuidados medicos e foi enviado ao pronto socorro',
                    'responsible' => 1,
                    'professor' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
