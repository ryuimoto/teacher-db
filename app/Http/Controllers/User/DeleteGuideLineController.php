<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        // d
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