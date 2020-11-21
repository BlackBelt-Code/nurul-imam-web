<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Programstudy;
use App\Models\Nik;
use Illuminate\Support\Facades\Cache;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $query = Cache::remember('teacher', 10, function()
        {
            return Teacher::with( ['nik', 'certificate', 'ktp', 'unptk', 'tmt', 'education','programstudy'])->paginate(10);
        });
            $title = 'Teachers';
            // $query= Teacher::with( ['nik', 'certificate', 'ktp', 'unptk', 'tmt', 'education','programstudy'])->paginate(10);
        return view('pages.teachers.index', ['teacher' => $query, 'title' => $title]);        
        // try {
        //     return view('pages.teachers.index', ['teacher' => $query, 'title' => $title]);
        // } catch (\Throwable $th) {
        //     //throw $th;
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Programstudy::all();
        return view('pages.teachers.create',['program' => $program]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = new Teacher();

        $query->first_name = $request->first_name;
        $query->last_name = $request->last_name;
        $query->full_name = $request->full_name;
        $query->programstudy_id = $request->program;
        $query->date_of_birth = $request->date;
        $query->address = $request->address;

        try {
            $query->save();
            return redirect('app/teachers/')->with('success', 'creatd success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', 'created failed');
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
        $query = Teacher::with([
            'nik', 'certificate', 'ktp', 'unptk', 'tmt', 'education','programstudy'
        ])->where('id', $id)->get();

        $program = Programstudy::all();
        $title = 'Show';
        return view('pages.teachers.show', ['teacher' => $query, 'title' => $title, 'program' => $program]);
    }

    public function updateLine(Request $request) {
        // var_dump($request->name,  $request->value);
        // $teacher = Teacher::find($request->pk)->update([$request->name => $request->value])->first();
        try {
       $teacher = Teacher::find($request->pk)->update([$request->name => $request->value]);
        } catch (\Exception $e) {
            return response($e->getMessage(), 400);
        }
            return response('', 200);
    }

    public function updatenik(Request $request) {
        
        $query = new Nik();


        $query->teacher_id = $request->pk;
        $query->nik = $request->value;
        
        $query->save();

        return response()->json(['success'=>'done']);
    }

    public function edit($id)
    {
        $query = Teacher::find($id);
        return view('pages.teachers._form_setting', ['teacher' => $query]);
    }

    public function update(Request $request, $id)
    {
        $query = Teacher::find($id);

        $query->first_name = $request->first_name;
        $query->last_name = $request->last_name;
        $query->full_name = $request->full_name;
        $query->date_of_birth = $request->date_of_birth;
        $query->address = $request->address;
        $query->programstudy_id = $request->programstudy_id;

        $query->save();

        $success= json_encode(['code'=>200,'success' => 'Your inquire is successfully sent.']);

        return redirect('app/teachers/show/' . $id)->with('success', 'success update');
    }

    public function destroy($id)
    {
        //
    }
}