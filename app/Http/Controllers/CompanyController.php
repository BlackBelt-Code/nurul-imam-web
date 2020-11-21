<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
use Laratrust\LaratrustFacade as Laratrust;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $builder)
    {
        if($request->ajax()){
            $query = Company::all();
            return DataTables::of($query)
            ->editColumn('action', function($data){
                if (Laratrust::hasRole('admin')) return 
                '<a class="btn btn-app" href="company/show/'.$data->id.'">
                <i class="fas fa-eye"></i> Show
            </a>
            <a class="btn btn-app" href="company/delete/'.$data->id.'">
                <i class="fas fa-trash"></i> Show
            </a>';
                return '<a class="btn btn-app" href="company/show/'.$data->id.'">
                <i class="fas fa-eye"></i> Show
            </a>';
            })
            ->make(true);
        }

        $html = 
        $builder->addColumn(['data' => 'id' , 'name' => 'id', 'title' => 'Company Name']);
        $builder->addColumn(['data' => 'company_name' , 'name' => 'company_name', 'title' => 'Company Name']);
        $builder->addColumn(['data' => 'created_at' , 'name' => 'created_at', 'title' => 'Company Name']);
        $builder->addColumn(['data' => 'updated_at' , 'name' => 'updated_at', 'title' => 'Company Name']);
        $builder->addColumn(['data' => 'action' , 'name' => 'action', 'title' => 'Action']);

        return view('pages.company.index', ['title' => 'Company'], compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        return view('pages.company.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = new Company();
        $query->company_name = $request->company_name;

        try {
            $query->save();
            return redirect('app/company')->with('success', 'Company Create Success');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('app/company')->with('danger', 'Company Create Failed');
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
        $company = Company::find($id);

        return view('pages.company.show', ['title' => 'Show Company'])->with(compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);

        return view('pages.company.edit')->with(compact('company'));
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
        $query = Company::find($id);

        $query->company_name = $request->company_name;

        try {
        $query->save();
        return redirect('app/company')->with('success', 'Update Company Success');
        } catch (\Throwable $th) {
            //throw $th;
        return redirect('app/company')->with('danger', 'Update Company Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $query = Company::find($id);
            $query->delete();
            return redirect('app/company')->with('success', 'Delete Company Success');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('app/company')->with('danger', 'Delete Company Failed');
        }
    }
}