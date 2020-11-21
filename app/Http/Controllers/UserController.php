<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use JWTAuth;
use Illuminate\Support\Facades\Validator;
use Laratrust\LaratrustFacade as Laratrust;
class UserController extends Controller
{
    use RegistersUsers;

    public function index(Request $request, Builder $builder)
    {
        if($request->ajax()){
            $query = User::with(['roleuser', 'roleuser.role'])->select(
                ['id', 'name', 'email'], 
                    ['roleuser', ['id', 'role_id'], 
                        ['roleuser.role', ['name']]])->get();
            return Datatables::of($query)
            ->editColumn('name', function ($data) {
                return '<a href="#">'.$data->name.'</a>';
            })

            ->editColumn('action', function ($data) {
                if (Laratrust::hasRole('admin')) return 
                '<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>';
                return '<a href=""><i class="fa fa-eye" aria-hidden="true"></a></i></a>';
                
            })
            ->rawColumns(['name', 'action'])
            ->make(true);
        }

        $html = $builder->addColumn([
            'data' => 'name', 'name' => 'name' , 'title' => 'User Name',
            ]);
            $builder->addColumn([
            'data' => 'email', 'name' => 'email' , 'title' => 'Email Users',
            ]);
            $builder->addColumn([
            'data' => 'roleuser.role.name', 'name' => 'roleuser.role.name' , 'title' => 'Role Users',
            ]);
            $builder->addColumn([ 'data' => 'action', 'name' => 'action', 'title' => 'Action',
            ]);
            
        return view('pages.users.index', ['title' => 'User Name'])->with(compact('html'));
    }

    public function register() {
        $role = Role::all();
        return view('pages.users.create', ['role' => $role])->with('title', 'Regiser Users');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        try {
            
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $role = Role::where('name', $data["role"])->first();
        $token = JWTAuth::fromUser($user);
        $user->attachRole($role);
        return $user;
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function store(Request $request) {
        $validator = $this->validator($request->all());
        $user = $this->create($request->all());
        return redirect()->route('apps-users');
    }
}