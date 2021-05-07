<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(){
        return view('user.thread_list');
    }
}
