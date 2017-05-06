<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;
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
    	$atch->vcc = Input::get('vcc');
    	$atch->vcat = Input::get('vcat');
    	$atch->save();
    	return view('/attachsuccess');
}
}