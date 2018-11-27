<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    CONST ID = 'id';
    CONST NAME = 'name';
    CONST COURSE_DURATION = 'course_duration';
    CONST CLASS_DURATION = 'class_duration';
    CONST PERIOD = 'period';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID,
        self::NAME,
        self::COURSE_DURATION,
        self::CLASS_DURATION,
        self::PERIOD,
    ];
}
