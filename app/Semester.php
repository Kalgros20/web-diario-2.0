<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    CONST ID = 'id';
    CONST YEAR = 'year';
    CONST HALF_YEAR = 'half_year';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::COURSE, self::ID
    ];
}
