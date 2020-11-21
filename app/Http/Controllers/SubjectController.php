<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectList;
use App\Models\Study;

class SubjectController extends Controller
{
    public function index() {
        $query = SubjectList::with('study')->paginate(5);
        // return response()->json($query);
        $title = 'Subject List';
        return view('pages.subjectlist.index', ['subject' => $query, 'title' => $title]);
    }

    public function create() {
        
        $study = Study::all();
        return view('pages.subjectlist._form', ['study' => $study]);
    }

    public function store(Request $request) {
        $query = new SubjectList();

        $query->times = $request->times;
        $query->study_time = $request->study_time;
        $query->count_times = $request->count_times;
        $query->study_id = $request->study_id;

        try {
            $query->save();
            return redirect('app/subject')->with('success', 'Subject created success');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
