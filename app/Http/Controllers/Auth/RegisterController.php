<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    CONST SUCCESS = 200;

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        dd($user->createToken('MyApp')->accessToken);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;
        return response()->json(['success' => $success], self::SUCCESS);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|int|exists:roles,id',
            'registry' => 'required|int|min:7',
            'password' => 'required|string|min:6',
            'course' => 'required_if:role,' . Role::PROFESSOR_ID . '|int|exists:courses,id',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();

        return $user->createUser($data['name'], $data['email'], $data['role'], $data['registry'], $data['password'], $data['course']);
    }
}
