<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterCourse extends Model
{
    CONST ID = 'id';
    CONST SEMESTRE = 'semester';
    CONST CURSO = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID,
        self::NOME,
        self::CAMPO
    ];
}
