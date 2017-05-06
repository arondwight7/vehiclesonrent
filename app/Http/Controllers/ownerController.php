<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\owner;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ownerController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function insert(Request $request)
    {
    	$ins = new owner;
    	$ins->name = Input::get('name');
    	$ins->email = Input::get('email');  
    	$ins->phoneno = Input::get('phone');
    	$ins->address = Input::get('address');
    	$ins->pin = Input::get('pin');
    	$ins->city = Input::get('city');
    	$ins->save();
    	return view('attach');
    }


}
