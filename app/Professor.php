<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    CONST ID = 'id';
    CONST COURSE = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::COURSE,
    ];

    /**
     * @param $id
     * @param $course
     *
     * @return bool
     */
    public function createProfessor($id, $course)
    {
        $professor = $this;
        $professor->setAttribute(self::ID, $id);
        $professor->setAttribute(self::COURSE, $course);

        return $professor->save();
    }
}
