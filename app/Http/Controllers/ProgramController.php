<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programs;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
class ProgramController extends Controller
{

    public function index(Request $request, Builder $htmlBuilder)
    {
        if($request->ajax()) {
            $query = Programs::select(['id', 'time_programs','time', 'person_charge', 'desc_activitie', 'evaluation_activitie'])->orderBy('created_at', 'DESC');
            return Datatables::of($query)
            ->editColumn('action', function ($data) {
                return "
                <a href='programs/edit/".$data->id."' class='btn btn-sm btn-info'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                <a onclick=\"return myFunction()\" href='programs/delete/".$data->id."' class='btn btn-sm btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></a>";
            })
            ->editColumn('time', function($data){
                return '<span class="badge badge-primary">'.$data->time.'</span>';
            })
            ->rawColumns(['action','time'])
            ->make(true);
        }

        $html =
        $htmlBuilder
        ->addColumn(['data' => 'time_programs' , 'name' => 'time_programs', 'title' => 'Jadwal Kegiatan']);
        $htmlBuilder
        ->addColumn(['data' => 'time' , 'name' => 'time', 'title' => 'Waktu Kegiatan']);
        $htmlBuilder
        ->addColumn(['data' => 'person_charge' , 'name' => 'person_charge', 'title' => 'Penanggung Jawab']);
        $htmlBuilder
        ->addColumn(['data' => 'desc_activitie' , 'name' => 'desc_activitie', 'title' => 'Deksripsi Kegiatan']);
        $htmlBuilder
        ->addColumn(['data' => 'evaluation_activitie' , 'name' => 'evaluation_activitie', 'title' => 'Evaluasi Kegiatan']);
        $htmlBuilder
        ->addColumn(['data' => 'action' , 'name' => 'action', 'title' => 'action']);
        return view('pages.programs.index', ['title' => 'Programs'])->with(compact('html'));
    }

    public function create()
    {
        return view('pages.programs.create');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'types_program' => 'required',
        //     'time_programs' => 'required',
        //     'person_charge' => 'required',
        //     'desc_activitie' => 'required',
        //     'evaluation_activitie' => 'required',
        //     'time' => 'times',
        // ]);
            $time = $request->time;
            $time_programs = $request->time_programs;
            $person_charge = $request->person_charge;
            $desc_activitie = $request->desc_activitie;
            $evaluation_activitie = $request->evaluation_activitie;

            $query = new Programs();
            $query->time =  $time;
            $query->time_programs =  $time_programs ;
            $query->person_charge = $person_charge;
            $query->desc_activitie =  $desc_activitie;
            $query->evaluation_activitie = $evaluation_activitie;


                try {
                    $query->save();
                    return redirect('app/programs')->with('success', 'success created');
                } catch (\Throwable $th) {
                    return redirect('app/programs')->with('danger', 'failed created');
                }


    }

  
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $query = Programs::FindOrFail($id);
        return view('pages.programs.edit', ['title' => 'Update Program', 'program' => $query]);
    }

    public function update(Request $request, $id)
    {
            $time = $request->time;
            $time_programs = $request->time_programs;
            $person_charge = $request->person_charge;
            $desc_activitie = $request->desc_activitie;
            $evaluation_activitie = $request->evaluation_activitie;

            $query = Programs::find($id);
            $query->time =  $time;
            $query->time_programs =  $time_programs ;
            $query->person_charge = $person_charge;
            $query->desc_activitie =  $desc_activitie;
            $query->evaluation_activitie = $evaluation_activitie;
            try {
                $query->save();
                return redirect('app/programs')->with('success', 'updated success');
            } catch (\Throwable $th) {
                //throw $th;
                return redirect('app/programs')->with('warning', 'failed success');
            }
    }

    public function destroy($id)
    {
        $delete = Programs::find($id);

        try {
            $delete->delete();
            return redirect('app/programs');//->with('success', 'deleted success');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('app/programs')->with('danger', 'deleted failed');
        }
    }
}