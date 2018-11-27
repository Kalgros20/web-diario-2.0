<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    /**
     * @return Subject[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Subject::all();
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

        $subject = Subject::create($request->all());

        return response()->json($subject, 201);
    }

    /**
     * @param Subject $subject
     * @return Subject
     */
    public function show(Subject $subject)
    {
        return $subject;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->update($request->all());

        return response()->json($subject, 200);
    }

    /**
     * @param Subject $subject
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Subject $subject)
    {

        $result = $subject->delete();

        if(!$result){
            return response()->json($result, 500);
        }

        return response()->json($result, 200);
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
            'course' => 'required|int|exists:users,id',
            'semester' => 'required|int|exists:semesters,id',
            'starts_at' => 'required|date_format:H:i',
            'ends_at' => 'required|date_format:H:i',
            'qty_classes' => 'required|int|min:2|max:4',
            'professor' => 'required|int|exists:professors,id',
        ]);
    }
}
