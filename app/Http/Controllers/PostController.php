<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Posts::paginate(5);
        $title = 'Dashboard';
        return view('pages.posts.index', ['posts' => $query, 'title' => $title]);
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
        $query = new Posts();
        $query->title = $request->title;
        $query->content = $request->content;

        try {
            $query->save();
            return redirect('app/about')->with('success', 'created post success');
        } catch (\Throwable $th) {
            // throw $th;
            // return response()->json([
            //     'error' => $th,
            // ]);

            return redirect()->back()->with('warning', $th->errorInfo[2]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = Posts::find($id);
        try {
            // return view('pages.posts.edit', ['posts' => $query]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $query = Posts::find($id);
        $query->title = $request->title;
        $query->content = $request->content;

        try {
            $query->save();
            return redirect()->back()->with('success', 'updated success');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('warning', 'try again title will be same');
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
        $query = Posts::find($id);

        try {
            $query->delete();
            return redirect()->back()->with('success', 'delete item success');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('info', 'delete item success');
        }
    }
}
