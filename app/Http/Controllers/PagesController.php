<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	  public function __construct()
     {
         $this->middleware('auth');
     }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		
		return view('about');
	}

	public function twowheelers()
	{
		
		return view('twowheelers');
	}

public function twowheelergear()
	{
		
		return view('twowheelergear');
	}

	public function attachsuccess()
	{
		
		return view('attachsuccess');
	}	
	


	public function fourwheelersedan()
	{
		
		return view('fourwheelersedan');
	}

	public function fourwheelersuv()
	{
		
		return view('fourwheelersuv');
	}

	public function admin()
	{
		
		return view('admin');
	}

	public function attach()
	{
		
		return view('attach');
	}


	public function checkout2()
	{
		
		return view('checkout2');
	}

	public function checkout3()
	{
		
		return view('checkout3');
	}

	public function checkout4()
	{
		
		return view('checkout4');
	}

	public function checkout5()
	{
		
		return view('checkout5');
	}


	public function payment()
	{
		
		return view('payment');
	}

	public function payment1()
	{
		
		return view('payment1');
	}

	public function payment2()
	{
		
		return view('payment2');
	}

	public function payment3()
	{
		
		return view('payment3');
	}

	public function acknowledge()
	{
		
		return view('acknowledge');
	}

	public function acknowledge1()
	{
		
		return view('acknowledge1');
	}

	public function acknowledge2()
	{
		
		return view('acknowledge2');
	}

	public function acknowledge3()
	{
		
		return view('acknowledge3');
	}

	

}
?>