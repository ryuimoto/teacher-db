<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thread;
use App\Comment;
use SebastianBergmann\CodeUnit\FunctionUnit;

class ThreadController extends Controller
{
    public function index(Thread $thread){
        $comments = Comment::where('thread_id',$thread->id)
        ->orderBy('comment_num','asc')->get();
        
        return view('user.thread')->with([
            'thread' => $thread,
            'comments' => $comments,
        ]);
    }

    public function post(Request $request){
        $this->postValidate($request);

        dd('done');
    }

    public function postValidate($request){
        $request->validate([
            'name' => 'nullable|max:255|',
            'email' => 'nullable|email|max:255',
            'comment' => 'required|max:300',
        ]);
    }
}