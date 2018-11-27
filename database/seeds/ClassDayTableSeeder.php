<?php

use Illuminate\Database\Seeder;

class ClassDayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_day')->insert(
            [
                [
                    'id' => 1,
                    'subject' => 2,
                    'day' => new DateTime('2018-11-11'),
                    'classes_given' => 4,
                    'note' => 'nenhuma'
                ],
                [
                    'id' => 2,
                    'subject' => 1,
                    'day' => new DateTime('2018-10-23'),
                    'classes_given' => 2,
                    'note' => 'nenhuma'
                ]
            ]
        );
    }
}
