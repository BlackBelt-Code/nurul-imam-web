<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Auth;
class ApiTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $query = Teacher::all();
            return response()->json($query, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'errror'
        ], 422);
        }
    }

    public function indexAuth()
    {
        $data = 'Guru' . Auth::user()->name;
        return response()->json($data);
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
        try {
            
            $teacher = new Teacher();
            $teacher->first_name = $request->first_name;
            $teacher->last_name = $request->last_name;
            $teacher->full_name = $request->first_name .' '. $request->last_name;
            $teacher->date_of_birth = $request->date;
            $teacher->address = $request->address;
            $teacher->programstudy_id = $request->program;
            $teacher->save();
            return response()->json(['response' => 'success']);
        } catch (\Throwable $th) {
           return response()->json([ 'error' => 'invalid create data'], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
