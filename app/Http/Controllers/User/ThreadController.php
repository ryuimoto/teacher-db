<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{
    public function index(Thread $thread){
        return view('user.thread')->with([
            'thread' => $thread,
        ]);
    }
}