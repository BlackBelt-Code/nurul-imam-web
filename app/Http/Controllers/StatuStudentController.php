<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatuStudent;
class StatuStudentController extends Controller
{
    public function index()
    {
        $query = StatuStudent::all();
        return view('pages.status_student.index', ['status_student' => $query, 'title' => 'Status Student']);
    }
}
