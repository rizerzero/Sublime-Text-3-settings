<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
 public function __construct()
    {
        // $this->middleware('admin');
    }

    public function index(Request $request){
    	$user=User::find(1);
    	return view('dashboard.index');
    	
    		
    }
}
