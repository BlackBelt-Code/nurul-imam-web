<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Students';
        $query = Student::with('nisn_student','nik_student','status_student')->where('status_student_id', '1')->paginate(5);
        // return response()->json($query);
        try {
            return view('pages.students.studentreguler.index', ['title' => $title, 'students' => $query]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('danger', 'Cannot');
        }
    }

    public function index_inkulsi() {
        $title = 'Students';
        $query = Student::with('nisn_student','nik_student','status_student')->where('status_student_id', '2')->paginate(5);
        // return response()->json($query);
        try {
            return view('pages.students.studentinklusi.index', ['title' => $title, 'students' => $query]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('danger', 'Cannot');
        }
    }

    public function index_beasiswa() {
        $title = 'Students';
        $query = Student::with('nisn_student','nik_student','status_student')->where('status_student_id', '3')->paginate(5);
        // return response()->json($query);
        try {
            return view('pages.students.studentbeasiswa.index', ['title' => $title, 'students' => $query]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('danger', 'Cannot');
        }
    }

    public function indexById($id)
    {
        $query  = Student::with(['nisn'])->where('id', $id)->get();
        
        try {
            return response()->json($query);
            // return view('pages.students.edit',['students' => $query]);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
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
        $query = new Student();

        $query->first_name = $request->first_name;
        $query->last_name = $request->last_name;
        $query->full_name = $request->full_name;
        $query->email = $request->email;
        $query->date_of_birth = $request->date;
        $query->address = $request->address;

        // dd($request->first_name, $request->last_name, $request->full_name, $request->email, $request->date, $request->address);

        // $nisn = $request->nisn;
        // $select = Student::where('id', 3)->select(array('id', 'nisn'));

        // $bindings = $select->getBindings();

        // $inserQuery = 'INSERT INTO nisn (student_id, nisn)' . $select->toSql();

        // \DB::insert($inserQuery, $bindings);
        try {
            $query->save();
            return redirect()->back()->with('success', 'Created student success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('warning', 'Failed Save Student');
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