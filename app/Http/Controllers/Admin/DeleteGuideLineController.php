<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RequestForDelete;
use App\Library\AdminView;

class DeleteGuideLineController extends Controller
{
    public function index(){
        $request_for_deletes = RequestForDelete::get();
        
        return view('admin.request_for_deletion')->with([
            'request_for_deletes' => $request_for_deletes,
        ]);
    }

}
