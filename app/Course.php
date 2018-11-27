<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    CONST ID = 'id';
    CONST NAME = 'name';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID,
        self::NAME
    ];
}
