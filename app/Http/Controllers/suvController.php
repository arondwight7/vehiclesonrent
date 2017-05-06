<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use \Stripe\Charge;
use App\suv;
use App\Vehicl1;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class suvController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function getsuv()
    {
    	$suvs =\App\suv::all();
    	return view('fourwheelersuv', ['suvs' => $suvs]);
   }

   public function getbookasuv(Request $request, $id)
   {
   		$suv = \App\suv::find($id);
   		$oldVehicl1 = Session::has('vehicl1') ? Session::get('vehicl1') : null;
   		$vehicl1 = new Vehicl1($oldVehicl1);
   		$vehicl1->add($suv, $suv->id);

   		$request->session()->put('vehicl1', $vehicl1);
      //dd($request->session()->get('vehicl'));
   		return redirect()->route('fourwheelersuv');
   }

   public function getsuvCart() {
    if (!Session::has('vehicl1')){
      return view('booking-suvcart',['suvs' => null]);
    }
    $oldVehicl1 = Session::get('vehicl1');
    $vehicl1 = new Vehicl1($oldVehicl1);
    return view('booking-suvcart',['suvs'=> $vehicl1->items, 'totalprice' => $vehicl1->totalprice]);
   }

   public function getCheckout()
   {   
    if (!Session::has('vehicl1')){
      return view('booking-suvcart',['suvs' => null]);
    } 
    $oldVehicl1 = Session::get('vehicl1');
    $vehicl1 = new Vehicl1($oldVehicl1);
    $total = 30000;
    return view('checkout3',['total' =>$total]);
   }

   public function postCheckout()
   {
    if (!Session::has('vehicl1')){
      return redirect()->route('bookingsuvcart');
    } 
    $oldVehicl1 = Session::get('vehicl1');
    $vehicl1 = new Vehicl1($oldVehicl1);
    
    Stripe::setApiKey('sk_test_H8qhYgBFnyVUdMyncOOeXPlK');
    try{ $total = 30000;
      Charge::create(array(
      "amount" => 30000 * 100,
      "currency" => "usd",
      "source" => "tok_1AGC7KJKrtHUdksMrPd9UP3x", // obtained with Stripe.js
      "description" => "Booking a SUV car"
    ));
    } catch (\Exception $e){
      return redirect()->route('checkout3')->with('error', $e->getMessage());

    }
    Session::forget('vehicl');
    return redirect()->route('acknowledge1')->with('success', 'Successfully');    
   }
}
