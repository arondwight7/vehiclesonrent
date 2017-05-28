<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;
use App\hatchback;
use App\sedan;
use App\suv;
use App\gear;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class vehicleController extends Controller
{
	public function __construct()
     {
         $this->middleware('auth');
     }

    public function attach(Request $request)
    {
    $atch = new vehicle;
    	$atch->vregno = Input::get('vregno');
    	$atch->vname = Input::get('vname');  
    	$atch->vtype = Input::get('vtype');
    	$atch->vmake = Input::get('vmake');
		$atch->available = Input::get('available');
		$atch->oid = Input::get('oid');
    	$atch->vcc = Input::get('vcc');
    	$atch->vcat = Input::get('vcat');
    	$atch->save();
		if (Input::get('vcat')=="Hatchback")
		{
			hatchback::where('vehiclename','=',Input::get('vname'))->increment('availability');
		}
		else if(Input::get('vcat')=="Sedan"){
			sedan::where('vehiclename','=',Input::get('vname'))->increment('availability');
		}
		else if(Input::get('vcat')=="SUV"){
			suv::where('vehiclename','=',Input::get('vname'))->increment('availability');
		}
		else if(Input::get('vcat')=="With Gear"){
			gear::where('vehiclename','=',Input::get('vname'))->increment('availability');
		}
    	return view('/attachsuccess');
}
}