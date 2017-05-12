<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\Http\Requests;

class settleController extends Controller
{
    public function viewsettle()
    {
    	$settle = new customer;
    	$settle = customer::all();
    	return view('settlepayment',compact('settle'));
    }

    public function settlepayment2($id)
    {
    	$settle1 = new customer;
    	$settle1 = customer::where('id',$id)->get();	
    	return view('settlepayment2',compact('settle1'));
    }
}
