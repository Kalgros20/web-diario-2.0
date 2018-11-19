<?php

namespace App\Http\Controllers;

use App\Occurrence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validation = $this->validator($request->all());

        if ($validation->fails()){
            return response()->json($validation->errors(), 422);
        }

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
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $occurrence = Occurrence::findOrFail($id);
        if(!$occurrence){
            return response()->json(error);
        }
        $occurrence->delete(); 

        return response()->json(null);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'semester' => 'required|int|min:1|max:2',
            'starts_at' => 'required|time',
            'ends_at' => 'required|time',
            'qty_classes' => 'required|integer|min:1|max:4',
            'course' => 'required|int|exists:course,id',
            'professor' => 'required|int|exists:professors,id',
        ]);
    }
}
