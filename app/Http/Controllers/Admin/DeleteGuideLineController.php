<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteGuideLineController extends Controller
{
    public function index(){
        return view('admin.request_for_deletion');
    }
}
