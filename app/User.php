<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    CONST ID = 'id';
    CONST NAME = 'name';
    CONST EMAIL = 'email';
    CONST ROLE = 'role';
    CONST REGISTRY = 'registry';
    CONST PASSWORD = 'password';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::NAME, self::EMAIL, self::PASSWORD, self::ROLE, self::REGISTRY,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        self::PASSWORD, 'remember_token',
    ];

    public function createUser($name, $email, $role, $registry, $password, $course = NULL)
    {
        $user = $this;
        $user->setAttribute(self::NAME, $name);
        $user->setAttribute(self::EMAIL, $email);
        $user->setAttribute(self::ROLE, $role);
        $user->setAttribute(self::REGISTRY, $registry);
        $user->setAttribute(self::PASSWORD, $password);
        $result = $user->save();

        if ($result && $user->getAttribute(self::ROLE) == Role::PROFESSOR) {
            $professor = new Professor();
            $result = $professor->createProfessor($user->getAttribute(self::ID), $course);
        }

        return $result;
    }
}
