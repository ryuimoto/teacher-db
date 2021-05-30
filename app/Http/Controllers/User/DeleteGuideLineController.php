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
}
