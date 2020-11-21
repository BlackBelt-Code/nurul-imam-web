<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use App\Models\Status;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // $valid = Validator::make($request->all(), [
        //     'name' => 'required|max:6',
        //     'email' => 'required|email|unique:users',
        //     'password'  => 'required|min:6',
        // ]);

        // if ($valid->fails()) {
        //     return response()->json([
        //         'status' => 'errorr',
        //         'errors' => $valid->errors(),
        //     ] . 422);
        // }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status_id = $request->status;
        try {
            $user->save();
            return response()->json([
                'status' => 'success',
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function login(Request $request)
    {
        $status = Status::all();
        $credentials = $request->only('email', 'password', 'status_id');
        switch ($credentials) {
            case $credentials['status_id'] == $status[0]->id:
                if ($token = $this->guard()->attempt($credentials)) {
                    $user = auth()->user();
                    return response()->json(['response' => 'success'], 200)->header('Authorization', $token);
                }
                break;
            case $credentials['status_id'] == $status[1]->id:
                if ($token = $this->guard()->attempt($credentials)) {
                    return response()->json(['response' => 'success'], 200)->header('Authorization', $token);
                }
                break;
            case $credentials['status_id'] == $status[2]->id:
                if ($token = $this->guard()->attempt($credentials)) {
                    return response()->json(['response' => 'success'], 200)->header('Authorization', $token);
                }
                break;
            default:
                return response()->json(['error' => 'login_error'], 401);
                break;
        }
        return response()->json(['error' => 'login_error'], 401);
        // if($credentials['status_id'] == $status) {
        //     if ($token = $this->guard()->attempt($credentials)) {                
        //         return response()->json(['response' => 'success'], 200)->header('Authorization', $token);
        //     }
        // }
        // else if($credentials['status_id'] == 2) {
        //     if ($token = $this->guard()->attempt($credentials)) {                
        //         return response()->json(['response' => 'success'], 200)->header('Authorization', $token);
        //     }
        // } else if($credentials['status_id'] == 3) {
        //     if ($token = $this->guard()->attempt($credentials)) {                
        //         return response()->json(['response' => 'success'], 200)->header('Authorization', $token);
        //     }
        // }
        // else if ($credentials['status_id'] == 2) {
        //     if ($token = $this->guard()->attempt($credentials)) {
        //     return response()->json(['status' => 'success', 'status_guru' => 'murid'], 200)->header('Authorization', $token);
        //     }
        // }

    }

    public function logout()
    {
        $this->guard()->logout();
        return response()->json([
            'status' => 'success',
            'msg' => 'logout success',
        ], 200);
    }

    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }
    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }
        return response()->json(['error' => 'refresh_token_error'], 401);
    }

    private function guard()
    {
        return Auth::guard();
    }
}
