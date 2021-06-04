<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RequestForDelete;
use App\Library\AdminView;
use Psy\CodeCleaner\FunctionContextPass;

class DeleteGuideLineController extends Controller
{
    public function index(){
        $request_for_deletes = RequestForDelete::get();
        
        return view('admin.request_for_deletion')->with([
            'request_for_deletes' => $request_for_deletes,
        ]);
    }

    public function showRequestForDeletionDetails(RequestForDelete $request_for_deletion){
        return view('admin.request_for_deletion_details')->with([
            'request_for_deletion' => $request_for_deletion,
        ]);
    }

    public function requestDelete(Request $request,RequestForDelete $request_for_deletion){
        $request_for_deletion->delete();
        return redirect()->route('admin.request_for_deletion');
    }
}
