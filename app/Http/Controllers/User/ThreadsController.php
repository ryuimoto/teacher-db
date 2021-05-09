<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thread;


class ThreadsController extends Controller
{
    public function index(){
        $threads = Thread::all();

        return view('user.threads')->with([
            'threads' => $threads,
        ]);
    }
}
