<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thread;


class ThreadsController extends Controller
{
    public function index(Request $request){

        dump($request->all());
        $threads = Thread::paginate(15);

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
           'name' => $request->name,
           'details' => $request->details,
        ]);

        return redirect()->route('user.threads');
    }

    public function registTeacherPostValidate($request){
        $request->validate([
            'name' => 'required|max:255|',
            'details' => 'required|max:500',
        ]);
    }
}
