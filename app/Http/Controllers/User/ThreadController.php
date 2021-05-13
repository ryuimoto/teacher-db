<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thread;
use App\Comment;

class ThreadController extends Controller
{
    public function index(Thread $thread){
        $comments = Comment::where('thread_id',$thread->id)->get();
        
        return view('user.thread')->with([
            'thread' => $thread,
            'comments' => $comments,
        ]);
    }
}