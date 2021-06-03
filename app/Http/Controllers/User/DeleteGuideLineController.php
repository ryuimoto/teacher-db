<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\RequestForDelete;

class DeleteGuideLineController extends Controller
{
    public function index(){
        return view('user.delete_guideline');
    }

    public function showRequestForDeletion(){
        return view('user.request_for_deletion');
    }

    public function RequestForDeletionPost(Request $request){
        $this->RequestForDeletionValidate($request);

        $url_conversion = implode(",", $request->url);

        $request_for_delete = RequestForDelete::create([
            'classification' => $request->classification,
            'thread_name' => $request->thread_name,
            'name' => $request->name,
            'delete_reason' => $request->delete_reason,
            'urls' => $url_conversion,        
        ]);

        $request_for_delete->update();

        return back()->with('post_message','投稿が完了しました');
    }

    public function RequestForDeletionValidate(Request $request){
        $request->validate([
            'classification' => 'required|max:200',
            'name' => 'required|max:255',
            'thread_name' => 'required|max:255',
            'url.*' => 'url|max:255',
            'delete_reason' => 'required|max:500',
        ]);
    }
}