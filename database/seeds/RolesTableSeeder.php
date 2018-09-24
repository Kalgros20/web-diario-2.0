<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                [
                    'id' => Role::ADMIN_ID,
                    'name' => Role::ADMIN,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => Role::PROFESSOR_ID,
                    'name' => Role::PROFESSOR,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
