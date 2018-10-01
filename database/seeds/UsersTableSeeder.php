<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'id' => 1,
                    'name' => Role::ADMIN,
                    'role' => Role::ADMIN_ID,
                    'email' => 'admin@email.com',
                    'registry' => 123456,
                    'password' => 123456,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'name' => 'jorge',
                    'role' => Role::PROFESSOR_ID,
                    'email' => 'jorge@email.com',
                    'registry' => 654321,
                    'password' => 123456,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
