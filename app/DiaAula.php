<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaAula extends Model
{
    CONST ID = 'id';
    CONST MATERIA = 'materia'
    CONST DIA = 'dia';
    CONST AULAS_DADAS = 'aulas_dadas';
    CONST OBSERVACAO = 'observacao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID,
        self::MATERIA,
        self::DIA,
        self::AULAS_DADAS,
        self::OBSERVACAO
    ];
}
