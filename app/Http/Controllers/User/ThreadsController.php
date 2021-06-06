<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Thread;
use App\User;

class ThreadsController extends Controller
{
    public function index(Request $request){

        $keyword = $request->input('keyword') ?? '';
        $pat = '%' . addcslashes($keyword, '%_\\') . '%';
        $threads = Thread::where('name', 'LIKE', $pat)->paginate(15);

        return view('user.threads')->with([
            'threads' => $threads,
        ]);
    }

    public function registTeacher(){
        return view('user.regist_teacher');
    }

    public function registTeacherPost(Request $request){
        $this->registTeacherPostValidate($request);
        
        Thread::create([
           'auther_ip' => $request->ip(),
           'name' => $request->name,
           'details' => $request->details,
        ]);

        $user = User::where('ip',$request->ip())->first();

        if(is_null($user)){
            $comment_view_id = str_random(8);

            User::create([
                'comment_view_id' => $comment_view_id,
                'ip' => $request->ip(),
            ]);
        }

        return redirect()->route('user.threads');
    }

    public function registTeacherPostValidate($request){
        $request->validate([
            'name' => 'required|max:255',
            'details' => 'required|max:500',
        ]);
    }
}
