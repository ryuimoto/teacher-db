<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\RequestForDelete;
use App\Thread;

class TopController extends Controller
{
    public function index(){
        $request_for_delete_count = RequestForDelete::get()->count();
        $num_of_threads = Thread::get()->count();

        return view('admin.top')->with([
            'request_for_delete_count' => $request_for_delete_count,
            'num_of_threads' => $num_of_threads,
        ]);
    }
}
