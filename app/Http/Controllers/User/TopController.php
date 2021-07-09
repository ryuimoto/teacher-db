<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Thread;

class TopController extends Controller
{
    public function index(){

        $thread_attensions = Thread::orderBy('num_of_comments','asc')
        ->take(3)->get();
    
        return view('user.top')->with([
            'thread_attensions' => $thread_attensions, 
        ]);
    }
}
