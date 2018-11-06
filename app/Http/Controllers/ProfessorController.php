<?php

namespace App\Http\Controllers;

use App\Role;
use App\Professor;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;

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
        $user = Professor::create($request->all());

        return response()->json($user, 201);
    }

    /**
     * @param Professor $user
     * @return Professor
     */
    public function show(Professor $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }

    /**
     * @param Professor $user
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete(Professor $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }
}
