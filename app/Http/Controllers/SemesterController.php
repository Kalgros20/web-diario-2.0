<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * @return Semester[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Semester::all();
    }

    /**
     * @param Semester $semester
     * @return Semester
     */
    public function show(Semester $semester)
    {
        return $semester;
    }
}
