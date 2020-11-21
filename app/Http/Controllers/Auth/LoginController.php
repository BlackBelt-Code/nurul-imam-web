<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use App\User;
use App\Role;
use App\RoleUser;
use DB;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = $request->validate([
            'name'     => 'required',
            'password'  => 'required|min:6'
        ]);

        // $update = User::where('id' , auth()->user()->id)->update(['_token' => $token]);
        //                  return redirect()->route('app')->header('Authorization', $token);

        if (Auth::attempt($validator)) {
            if ($token = JWTAuth::attempt($validator)) {
                // $data = User::with('roleuser')->where('id', auth()->user()->id)->get();
                // if ($data[0]->roleuser["user_id"] == auth()->user()->id) {
                $update = User::where('id', auth()->user()->id)->update(['_token' => $token]);
                return redirect()->route('app')->header('Authorization', $token);
                // } else {
                // return redirect('/')->with('danger', 'You Dont Have Role');
                // }
            } else {
                return redirect('/')->with('danger', 'Token Expired');
            }
        } else {
            return redirect('/')->with('danger', 'Check Your Name or Password');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success', 'Logout Success');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

}
