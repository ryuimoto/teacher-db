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

    public function post(Thread $thread,Request $request){
        $this->postValidate($request);

        $cur_comments_count = Comment::where('thread_id',$thread->id)
        ->orderBy('comment_num','desc')->first();

        $comment = Comment::create([
            'thread_id' => $thread->id,
            'comment_num' => $cur_comments_count->comment_num +1,
            'name' => $request->name,
            'email' => $request->email,
            'comment_view_id' => str_random(8),
            'comment' => $request->comment,
        ]);

        if(strpos($request->comment,'>>') !== false){
            preg_match_all('!\d+!', $request->comment, $match);

            $comment->res_comment_num = $match[0][0];
            $comment->comment = str_replace(">> $comment->res_comment_num ",'',$comment->comment);
            $comment->comment = str_replace(">>$comment->res_comment_num ",'',$comment->comment);

            $comment->save();
        }

        return back();
    }

    public function postValidate($request){
     
        $request->validate([
            'name' => 'nullable|max:255|',
            'email' => 'nullable|email|max:255',
            'comment' => 'required|max:300',
        ]);
    }

    public function commentDetails(Comment $comment,Thread $thread){
        $parent_comment = Comment::where('comment_num',$comment->res_comment_num)->first();

        return view('user.thread')->with([
            'parent_comment' => $parent_comment,
            'comment' => $comment,
            'thread' => $thread,
        ]);
    }
}