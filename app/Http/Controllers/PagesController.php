<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\customer;
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
	
	public function adminowntc()
	{
		
		return view('adminowntc');
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
		$email = Auth::user()->email;
		$cu = customer::where('email','=',$email)->pluck('address')[0];
		$vt = customer::where('email','=',$email)->pluck('vehicletaken')[0];
		$d = customer::where('email','=',$email)->pluck('deposit')[0];
		$pn = customer::where('email','=',$email)->pluck('phoneno')[0];
		$p = customer::where('email','=',$email)->pluck('pick')[0];
		$pt = customer::where('email','=',$email)->pluck('picktime')[0];
		return view('acknowledge',compact('cu','vt','d','pn','p','pt'));
		
	}

	public function acknowledge1()
	{
		$email = Auth::user()->email;
		$cu = customer::where('email','=',$email)->pluck('address')[0];
		$vt = customer::where('email','=',$email)->pluck('vehicletaken')[0];
		$d = customer::where('email','=',$email)->pluck('deposit')[0];
		$pn = customer::where('email','=',$email)->pluck('phoneno')[0];
		$p = customer::where('email','=',$email)->pluck('pick')[0];
		$pt = customer::where('email','=',$email)->pluck('picktime')[0];
		return view('acknowledge1',compact('cu','vt','d','pn','p','pt'));
	}

	public function acknowledge2()
	{
		$email = Auth::user()->email;
		$cu = customer::where('email','=',$email)->pluck('address')[0];
		$vt = customer::where('email','=',$email)->pluck('vehicletaken')[0];
		$d = customer::where('email','=',$email)->pluck('deposit')[0];
		$pn = customer::where('email','=',$email)->pluck('phoneno')[0];
		$p = customer::where('email','=',$email)->pluck('pick')[0];
		$pt = customer::where('email','=',$email)->pluck('picktime')[0];
		return view('acknowledge2',compact('cu','vt','d','pn','p','pt'));
	}

	public function acknowledge3()
	{
		$email = Auth::user()->email;
		$cu = customer::where('email','=',$email)->pluck('address')[0];
		$vt = customer::where('email','=',$email)->pluck('vehicletaken')[0];
		$d = customer::where('email','=',$email)->pluck('deposit')[0];
		$pn = customer::where('email','=',$email)->pluck('phoneno')[0];
		$p = customer::where('email','=',$email)->pluck('pick')[0];
		$pt = customer::where('email','=',$email)->pluck('picktime')[0];
		return view('acknowledge3',compact('cu','vt','d','pn','p','pt'));
	
	}

	public function orders()
	{
		
		return view('orders');
	}

	public function terms()
	{
		
		return view('terms');
	}
	public function feedback()
	{
		
		return view('feedback');
	}

	public function feedsuccess()
	{
		
		return view('feedsuccess');
	}

	public function settlepayment()
	{
		
		return view('settlepayment');
	}
	
	public function settlepayment2()
	{
		
		return view('settlepayment2/{id}');
	}

	public function adminavail()
	{
		
		return view('adminavail');
	}

	public function finalacknowledgement()
	{
		
		return view('finalacknowledgement/{id}');
	}

	public function settlepayment1()
	{
		
		return view('settlepayment1/{id}');
	}

	

}
?>