<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\Classes;
class StudyController extends Controller
{
    public function index() {
        $query = Study::paginate(11);
        $classes = Classes::all();
        $title = 'Studys';
        return view('pages.studys.index', ['study' => $query, 'title' => $title, 'classes' => $classes]);
    }
}
