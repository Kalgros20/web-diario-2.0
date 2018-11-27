<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Role;
use App\User;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Laravel\Passport\HasApiTokens;

class UserController extends Controller
{
    use HasApiTokens;
    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        if ($user->role == Role::PROFESSOR_ID){
            $data = $user->getAttributes();
            $data[Professor::COURSE] = $request->course;
            $data[Professor::USER_ID] = $data[Professor::ID];

            Professor::create($data);
        }

        return response()->json($user, 201);
    }

    /**
     * @param User $user
     * @return User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $result = $user->delete();
        $professor = Professor::where('user_id',$user->id)->first();

        if($professor){
            $professor->delete();
        }

        return response()->json($result, 204);
    }
}
