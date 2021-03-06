<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occurrence extends Model
{
    CONST DESCRIPTION = 'description';
    CONST RESPONSIBLE = 'responsible';
    CONST PROFESSOR = 'professor';
    CONST TITLE = 'title'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::DESCRIPTION, self::RESPONSIBLE, self::PROFESSOR, self::TITLE
    ];
}
