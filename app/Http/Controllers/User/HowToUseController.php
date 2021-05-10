<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HowToUseController extends Controller
{
    public function index(){
        return view('user.how_to_use');
    }
}
