<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterCourse extends Model
{
    CONST ID = 'id';
    CONST SEMESTER = 'semester';
    CONST COURSE = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID,
        self::SEMESTER,
        self::COURSE
    ];
}
