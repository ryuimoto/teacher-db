<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Thread;

class ThreadsController extends Controller
{
    public function index(){
        $threads = Thread::paginate();

        return view('admin.threads')->with([
            'threads' => $threads,
        ]);
    }

    public function showThread(Thread $thread){
        dd(3547687);
    }
}
