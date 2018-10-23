<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    CONST ID = 'id';
    CONST NOME = 'name'
    CONST CAMPO = 'campo';

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
