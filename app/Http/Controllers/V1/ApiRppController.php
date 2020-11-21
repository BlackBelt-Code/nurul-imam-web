<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rpp;
class ApiRppController extends Controller
{
    public function index() {
        $query = Rpp::with(['study', 'classes'])->get();
        if($query->count())
        {
            return response()->json($query, 200);
        }        
        return response()->json(['status' => 'invalid data']);
    }

    public function store(Request $request) {
        
        $query = new Rpp();
        $query->user_id = $request->user_id;
        $query->study_id = $request->study_id;
        $query->class_id = $request->class_id;
        $query->semester = $request->semester;
        $query->tahun_ajaran= $request->tahun_ajaran;
        $query->kompentensi_dasat  = $request->kompentensi_dasar;
        $query->tujuan = $request->tujuan;
        $query->materi = $request->materi;
        $query->pendekatan = $request->pendekatan;
        $query->model = $request->model;
        $query->alat_media = $request->alat_media;
        $query->sumber_belajar = $request->sumber_belajar;
        $query->penilaian = $request->penilaian;
        $query->tanggal = $request->tanggal;
        $query->pertemuan = $request->pertemuan;
        $query->alokasi_waktu = $request->alokasi_waktu;

        $query->save();

        return response()->json($query, 200);
    }
}