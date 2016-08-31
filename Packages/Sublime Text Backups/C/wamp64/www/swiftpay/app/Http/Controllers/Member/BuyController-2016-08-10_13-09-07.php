<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BuyController extends Controller
{

public function index(){
			// 
     		$buyData=Product::with(['user'])->where('user_id','!=',Auth::user()->id)->paginate(10);
    		return view('member.buy.index', ['buyData'=>$buyData]);
 }

public function buy(Request $request){

			$product = Product::findOrFail($request->product_id)->first();

			if($product){

					$transaction= new Transaction();
					$transaction->addTransaction($product, $request);

					 return redirect()->route( 'member.transaction.index' )
        							  ->with( 'success', 'Transaction success' );
    				 return Redirect::to(route(''));
				
			}

}

}

