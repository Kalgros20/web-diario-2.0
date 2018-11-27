<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassDay extends Model
{
    CONST ID = 'id';
    CONST SUBJECT = 'subject';
    CONST DAY = 'day';
    CONST CLASSES_GIVEN = 'classes_given';
    CONST NOTE = 'note';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID,
        self::SUBJECT,
        self::DAY,
        self::CLASSES_GIVEN,
        self::NOTE
    ];
}
