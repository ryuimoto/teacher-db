<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\RequestForDelete;

class TopController extends Controller
{
    public function index(){
        $request_for_delete_count = RequestForDelete::get()->count();

        return view('admin.top')->with([
            'request_for_delete_count' => $request_for_delete_count,
        ]);
    }
}
