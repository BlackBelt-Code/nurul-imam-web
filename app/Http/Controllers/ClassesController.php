<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
class ClassesController extends Controller
{
    public function index() {
        $title = 'Classes';
        $query = Classes::all();

        if($query->count()) {
            return view('pages.classes.index', ['title' => $title, 'classes' => $query]);
        }
    }
}
