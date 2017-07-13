<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\customer;
use App\price;
use App\calculates;
use App\bill;
use App\hatchback;
use App\sedan;
use App\suv;
use App\gear;
use App\vehicle;
use App\Order;
use App\Http\Requests;
use App\User;
class settleController extends Controller
{
	public function __construct()
     {
         $this->middleware('auth');
     }
    public function viewsettle()
    {
    	$settle = new customer;
    	$settle = customer::all();
    	return view('settlepayment',compact('settle'));
    }

    public function settlepayment2($id)
    {

    	$settle1 = new customer;
    	$settle1 = customer::where('email','=',$id)->first();
		$user = User::where('email','=',$id)->first();
		$order = Order::where('user_id','=',$user->id)->select('name')->first();
		
		vehicle::where('vregno','=',$order->name)->update(['available'=>'0']);
	  // $fd = bill::all();
    	return view('settlepayment2',compact('settle1','id'));
    }

    public function calculate(Request $request)
    {
        $cal = new calculates;
        $cal->name = Input::get('name');
        $cal->vehiclename = Input::get('vehiclename');
        $cal->excessh =  Input::get('excessh');
        $cal->bprice = Input::get('bprice');
        $cal->exessph =  Input::get('exessph');
        $cal->totalcharge = Input::get('totalcharge');
        $cal->totalcharge = $cal->bprice+($cal->excessph*$cal->excessh);
        $cal->save();
        return back();
    }

	 public function settlepayment1($id)
    {

    	$settle1 = new customer;
    	$settle1 = customer::where('email','=',$id)->first();
		$user = User::where('email','=',$id)->first();
		$order = Order::where('user_id','=',$user->id)->select('name')->first();
		
		vehicle::where('vregno','=',$order->name)->update(['available'=>'0']);
		$ret = vehicle::where('vregno','=',$order->name)->select('vcat','vname')->first();
		
		if($ret->vcat=="Hatchback")
		{
			hatchback::where('vehiclename','=',$ret->vname)->increment('availability');
		}
		else if($ret->vcat=="Sedan"){
			sedan::where('vehiclename','=',$ret->vname)->increment('availability');
		}
		else if($ret->vcat=="SUV"){
			suv::where('vehiclename','=',$ret->vname)->increment('availability');
		}
		else if($ret->vcat=="Gear"){
			gear::where('vehiclename','=',$ret->vname)->increment('availability');
		}
        $fd = bill::all();
    	return view('settlepayment1',compact('settle1','fd'));
    }
}
