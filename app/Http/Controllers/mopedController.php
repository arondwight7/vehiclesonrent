<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mopedController extends Controller
{
    public function getmoped()
    {
    	$mopeds =\App\moped::all();
    	return view('twowheelermoped', ['mopeds' => $mopeds]);
   }
}
