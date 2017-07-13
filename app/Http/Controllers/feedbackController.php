<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\feedback;

use Illuminate\Support\Facades\Input;

class feedbackController extends Controller
{
	public function __construct()
     {
         $this->middleware('auth');
     }
    public function insert(Request $request)
    {
    	$ins = new feedback;
    	$ins->name = Input::get('name');
    	$ins->email = Input::get('email');  
    	$ins->feedback = Input::get('feedback');
    	$ins->save();
    	return view('feedsuccess');
    }

    
}
