<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    CONST ID = 'id';
    CONST COURSE = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::COURSE, self::ID
    ];
}
