<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassDay;

class ClassDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClassDay::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $diaAula = ClassDay::create($request->all());

        return response()->json($diaAula, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ClassDay $diaAula)
    {
        return $diaAula;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassDay $classDay)
    {
        $classDay->update($request->all());

        return response()->json($classDay, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classDay = ClassDay::findOrFail($id);
        if($classDay){
            $classDay->delete();
            return response()->json(null);
        }

        return response()->json(error);
    }
}
