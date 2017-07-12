<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\vehicle;
use App\Order;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class customerController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

     public function insert()
     {
      $ins = new customer;
      $ins->name = Input::get('name');
      $ins->email = Input::get('email');  
      $ins->phoneno = Input::get('phone');
      $ins->address = Input::get('address');
      $ins->vehicletaken = Input::get('vehicletaken');
      $ins->bprice = Input::get('bprice');
      $ins->deposit = Input::get('deposit');
      $ins->excessph = Input::get('excessph');
      $ins->dl = Input::get('dl');
      $ins->exp = Input::get('exp');
      $ins->pick = Input::get('pick');
      $ins->picktime = Input::get('picktime');
      $ins->save();
		  $vno = vehicle::where([['vname','=',Input::get('vehicletaken')],['available','=','0']])->select('vregno')->first();
		  
		    $samp = $vno->vregno;
		  //$email = Auth::user()->email;
	//$cu = customer::where('email','=',$email)->pluck('address')[0];
      return view('payment',compact('samp'));
    }
	
	public function cancel($id)
	{
		order::where('id','=',$id)->update(['cancel'=>'cancelled']);
		$orders = order::where('id','=',$id)->get();
	
		return view('/orders',compact('orders'))->with('success', 'Successfully cancelled');
	}
      
}
