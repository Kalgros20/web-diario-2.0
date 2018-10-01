<?php

namespace App\Http\Controllers;

use App\Occurrence;
use Illuminate\Http\Request;

class OccurrenceController extends Controller
{
    /**
     * @return Occurrence[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Occurrence::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $occurrence = Occurrence::create($request->all());

        return response()->json($occurrence, 201);
    }

    /**
     * @param Occurrence $occurrence
     * @return Occurrence
     */
    public function show(Occurrence $occurrence)
    {
        return $occurrence;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Occurrence  $occurrence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Occurrence $occurrence)
    {
        $occurrence->update($request->all());

        return response()->json($occurrence, 200);
    }

    /**
     * @param Occurrence $occurrence
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete(Occurrence $occurrence)
    {
        $occurrence->delete();

        return response()->json(null, 204);
    }
}
