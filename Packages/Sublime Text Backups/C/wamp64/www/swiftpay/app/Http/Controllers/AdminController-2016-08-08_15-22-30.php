<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
 public function __construct()
    {
        // $this->middleware('admin');
    }

    public function index(Request $request){
    	$auth=Auth::user();
        return view('admin.dashboard', ['auth'=>$auth]);

    //	return view('dashboard.index');
    	
    		
    }
}
