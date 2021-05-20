<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thread;

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
