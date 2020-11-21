<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewLessonNotification;
use App\Models\Lesson;
use App\User;
use Auth;
class LessonController extends Controller
{

    public function create() {
        return view('notifications._form');
    }
    public function newLesson(Request $request) {
        $lesson =  new Lesson;
        $lesson->user_id = auth()->user()->id;
        $lesson->title = $request->title;
        $lesson->body = $request->body;
        $lesson->save();

        $user = User::where('id', '!=' , auth()->user()->id)->get();
        // dd($user);

        if(\Notification::send($user, new NewLessonNotification(Lesson::latest('id')->first())))
        {
            return redirect()->back();
        }

        return redirect('app/notifications')->with('success', 'Notification with ' . $request->title . ' Sended !!');
    }


    public function index() {
        $id = auth()->user()->id;
        $lesson = Lesson::where('user_id', $id)->paginate(3);

        return view('notifications.index', 
        [
            'lesson' => $lesson,
            'title' => 'Notifications',
        ]);
    }

    public function notif()
    {
        $data = \DB::table('notifications')->select('data')->get();
        // dd($data);
        return view('master.test')->with(compact('data'));;
    }
}