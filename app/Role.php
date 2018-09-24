<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    CONST NAME = 'name';

    CONST ADMIN = 'admin';
    CONST ADMIN_ID = 1;

    CONST PROFESSOR = 'professor';
    CONST PROFESSOR_ID = 2;

    /**
     * @param $name
     *
     * @return bool
     */
    protected function createRole($name)
    {
        $role = $this;
        $role->setAttribute(self::NAME, $name);
        $result = $role->save();

        return $result;
    }
}
