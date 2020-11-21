<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nisn;

class NisnController extends Controller
{
    
    public function updatenisn(Request $request)
    {
        $query = new Nisn();

        $query->student_id = $request->id;
        $query->nisn = $request->nisn;

        try {
            $query->save();
            return redirect()->back()->with('success', 'Update NISN success');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('warning', 'Check NISN maybe Duplicate');
        }

    }
}
