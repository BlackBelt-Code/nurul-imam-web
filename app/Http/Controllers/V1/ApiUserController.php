<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Validator;
use App\User;
use App\Models\Status;
use Auth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiUserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password', 'status_account_id');
        // $token = auth()->attempt($credentials);
        $status = Status::all();
        try {
            switch ($credentials) {
                case $credentials['status_account_id'] == $status[0]->id:
                    if ($token = JWTAuth::attempt($credentials)) {
                        // if($token = auth()->attempt($credentials)) {
                        $user = auth()->user();
                        $update = User::where('id', auth()->user()->id)->update(['_token' => $token]);
                        return response()->json($user, 200)->header('Authorization', $token);
                    }
                    break;
                case $credentials['status_account_id'] == $status[1]->id:
                    if ($token = JWTAuth::attempt($credentials)) {
                        $user = auth()->user();
                        $update = User::where('id', auth()->user()->id)->update(['_token' => $token]);
                        return response()->json(['response' => 'success',  'users' => $user, 'token' => $token], 200)->header('Authorization', $token);
                    }
                    break;
                case $credentials['status_account_id'] == $status[2]->id:
                    if ($token = JWTAuth::attempt($credentials)) {
                        $user = auth()->user();
                        $update = User::where('id', auth()->user()->id)->update(['_token' => $token]);
                        return response()->json(['response' => 'success',  'users' => $user, 'token' => $token], 200)->header('Authorization', $token);
                    }
                    break;

                default:
                    break;
            }
        } catch (\JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(['error' => 'invalid credential'], 400);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'status_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        // dd($request->get('status_id'));
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->status_id = $request->status_id;

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'status_id' => $request->get('status_id'),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user', 'token'), 201);
    }

    public function getAuthenticatedUser(Request $request)
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

            //     $user = User::find(Auth::user()->id);
            // return response()->json([
            //     'status' => 'success',
            //     'data' => $user
            // ]);

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());
        }

        return response()->json(compact('user'));
    }
}
