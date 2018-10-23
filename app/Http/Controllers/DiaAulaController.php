<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiaAula;

class DiaAulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DiaAula::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->validator($request->all());

        if ($validation->fails()){
            return response()->json($validation->errors(), 422);
        }

        $diaAula = DiaAula::create($request->all());

        return response()->json($diaAula, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DiaAula $diaAula)
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
    public function update(Request $request, DiaAula $diaAula)
    {
        $diaAula->update($request->all());

        return response()->json($diaAula, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diaAula = Occurrence::findOrFail($id);
        if($diaAula)
            $diaAula->delete();
        else
            return response()->json(error);
        return response()->json(null);
    }
}
