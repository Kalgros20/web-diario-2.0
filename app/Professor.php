<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    CONST USER_ID = 'user_id';
    CONST COURSE = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::COURSE, self::USER_ID
    ];
}
