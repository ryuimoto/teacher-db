<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Thread;

class ThreadsController extends Controller
{
    public function index(){
        $threads = Thread::paginate();
        $num_of_threads = Thread::get()->count();

        return view('admin.threads')->with([
            'threads' => $threads,
            'num_of_threads' => $num_of_threads,
        ]);
    }

    public function showThread(Thread $thread){
        return view('admin.thread')->with([
            'thread' => $thread,
        ]);
    }

    public function updateThread(Request $request,Thread $thread){
        $this->updateValidate($request);

        $thread->name = $request->name;
        $thread->details = $request->details;
        $thread->update();

        return back();
    }

    public function updateValidate($request){
        $request->validate([
            'name' => 'required|max:255|',
            'details' => 'required|max:500',
        ]);
    }

   
    public function deleteThread(Request $request,Thread $thread){
       $thread->delete();
       
       return redirect()->route('admin.threads');
    }
}