<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
        return view('user.support');
    }

    public function post(Request $request){
        dd($request->all());
    }
}
