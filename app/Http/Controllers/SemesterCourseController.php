<?php

namespace App\Http\Controllers;

use App\SemesterCourse;
use Illuminate\Http\Request;

class SemesterCourseController extends Controller
{
    /**
     * @return SemesterCourse[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return SemesterCourse::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semesterCourse = SemesterCourse::create($request->all());

        return response()->json($semesterCourse, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SemesterCourse $semesterCourse)
    {
        return $semesterCourse;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $semesterCourse->update($request->all());

        return response()->json($semesterCourse, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $semesterCourse = SemesterCourse::findOrFail($id);

        if(!$semesterCourse){
            return response()->json("error");
        }
        $semesterCourse->delete();

        return response()->json(null);
    }
}
