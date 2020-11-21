<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Validator;
use App\User;
use Auth;
use JWTAuth;
class ApiPostController extends Controller
{
    public function index(Request $request) {
        // $post = Posts::all();
        $post = Posts::with('user')->get();
        return response()->json(['success', 'post' => $post], 201);
       
    }


    public function getPostUser(Request $request) {
        
        if(! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['status' => 'token expired']);
        }
        $post = Posts::with('user')->where('user_id', $user->id)->get();
        return response()->json($post);
    }

    public function store(Request $request) {
        $valid = Validator::make($request->all(), [
            'user_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
         ]);

        //  dd($valid);

        if($valid->fails()) {
            return response()->json($valid->errors()->toJson(), 404);
        }

        $post  = new Posts();
        $post->user_id = $request->get('user_id');
        $post->title = $request->get('title');
        $post->content = $request->get('content');

        try {
            $post->save();
            return response()->json(['status' => 'success'], 201);
        } catch (\Throwable $th) {
            return response()->json(['invalid' => 'invalid'], 201);
        }
    }
}