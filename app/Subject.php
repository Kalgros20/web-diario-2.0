<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    CONST ID = 'id';
    CONST NAME = 'name';
    CONST COURSE = 'course';
    CONST SEMESTER = 'semester';
    CONST STARTS_AT = 'starts_at';
    CONST ENDS_AT = 'ends_at';
    CONST QTY_CLASSES = 'qty_classes';
    CONST PROFESSOR = 'professor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::NAME, self::COURSE, self::SEMESTER, self::STARTS_AT, self::ENDS_AT, self::QTY_CLASSES, self::PROFESSOR,
    ];
}
