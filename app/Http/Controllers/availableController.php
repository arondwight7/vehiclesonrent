<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suv;
use App\sedan;
use App\hatchback;
use App\gear;
use App\Http\Requests;

class availableController extends Controller
{
   public function suv()
   {
   		
   		$savail = suv::all();
   		$seavail = sedan::all();
   		$havail = hatchback::all();
   		$gavail = gear::all();
   		return view('adminavail',compact('savail','seavail','havail','gavail'));
   } 
}
