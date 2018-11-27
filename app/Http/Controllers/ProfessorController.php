<?php

namespace App\Http\Controllers;

use App\Role;
use App\Professor;
use App\User;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
    /**
     * @return Professor[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Professor::all();
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

        $occurrence = Professor::create($request->all());
        $user = User::find($request->user_id);

        $user->setAttribute(User::ROLE, Role::PROFESSOR_ID);
        $user->save();
        return response()->json($occurrence, 201);

    }

    /**
     * @param Professor $professor
     * @return Professor
     */
    public function show(Professor $professor)
    {
        return $professor;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        $result = $professor->update($request->all());

        return response()->json($result, 200);
    }

    /**
     * @param Professor $professor
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Professor $professor)
    {
        $result = $professor->delete();

        return response()->json($result, 204);
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
            'user_id' => 'required|int|exists:users,id',
            'course' => 'required|int|exists:courses,id',
        ]);
    }
}
