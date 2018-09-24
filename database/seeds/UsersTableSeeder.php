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
        $name = Role::ADMIN;
        $email = 'admin.teste@ifsp.edu.br';
        $role = Role::ADMIN_ID;
        $registry = 123456;
        $password = 123456;

        $user = new User();
        $user->createUser($name, $email, $role, $registry, $password);
    }
}
