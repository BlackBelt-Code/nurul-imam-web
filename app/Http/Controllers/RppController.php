<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rpp;
use App\Exports\RppExport;
use App\Exports\RppExportAll;
use Maatwebsite\Excel\Facades\Excel;
class RppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
            $query = Rpp::with(['study', 'class'])->orderBy('created_at', 'DESC')->paginate(6);
            // return response()->json($query);
            $title = 'Rencana pelaksana pembelajaran';
            return view('pages.rpp.index', ['rpp' => $query, 'title' => $title]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = Rpp::with(['study', 'class'])->orderBy('created_at', 'DESC')->where('id', $id)->paginate(6);
            // return response()->json($query);
            $title = 'Rencana pelaksana pembelajaran';
            return view('pages.rpp._show', ['rpp' => $query, 'title' => $title]);
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

    public function exportExcel()
    {
        return Excel::download(new RppExportAll, 'rpp.xlsx');
    }

    public function exportExcelById($id) {

        $data = Rpp::find($id);
        return Excel::download(new RppExport($id), 'Rencana pelaksana pembelajaran ('.$data->materi.').xlsx');
    }
}
