<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use \Stripe\Charge;
use App\gear;
use App\Vehicl3;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class gearController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function getgear()
    {
    	$gears =\App\gear::all();
    	return view('twowheelergear', ['gears' => $gears]);
   }

   public function getbookagear(Request $request, $id)
   {
   		$gear = \App\gear::find($id);
   		$oldVehicl3 = Session::has('vehicl3') ? Session::get('vehicl3') : null;
   		$vehicl3 = new Vehicl3($oldVehicl3);
   		$vehicl3->add($gear, $gear->id);

   		$request->session()->put('vehicl3', $vehicl3);
      //dd($request->session()->get('vehicl3'));
   		return redirect()->route('twowheelergear');
   }

   public function getgearCart() {
    if (!Session::has('vehicl3')){
      return view('booking-gearcart',['gears' => null]);
    }
    $oldVehicl3 = Session::get('vehicl3');
    $vehicl3 = new Vehicl3($oldVehicl3);
    return view('booking-gearcart',['gears'=> $vehicl3->items, 'totalprice' => $vehicl3->totalprice]);
   }

   public function getCheckout()
   {   
    if (!Session::has('vehicl3')){
      return view('booking-gearcart',['hatchbacks' => null]);
    } 
    $oldVehicl3 = Session::get('vehicl3');
    $vehicl3 = new Vehicl3($oldVehicl3);
    $total = 5000;
    return view('checkout5',['total' =>$total]);
   }

   public function postCheckout()
   {
    if (!Session::has('vehicl3')){
      return redirect()->route('bookinggearcart');
    } 
    $oldVehicl3 = Session::get('vehicl3');
    $vehicl3 = new Vehicl3($oldVehicl3);
    
    Stripe::setApiKey('sk_test_H8qhYgBFnyVUdMyncOOeXPlK');
    try{ $total = 5000;
      Charge::create(array(
      "amount" => 5000 * 100,
      "currency" => "usd",
      "source" => "tok_1AGCAOJKrtHUdksMGqyGlMhH", // obtained with Stripe.js
      "description" => "Booking a Hatchback Car"
    ));
    } catch (\Exception $e){
      return redirect()->route('checkout5')->with('error', $e->getMessage());

    }
    Session::forget('vehicl3');
    return redirect()->route('acknowledge3')->with('success', 'Successfully');    
   }
}
