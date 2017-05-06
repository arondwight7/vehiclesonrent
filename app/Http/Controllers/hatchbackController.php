<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use \Stripe\Charge;
use App\hatchback;
use App\Vehicl2;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
class hatchbackController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function gethatchback()
    {
    	$hatchbacks =\App\hatchback::all();
    	return view('twowheelers', ['hatchbacks' => $hatchbacks]);
   }
   public function getbookahatchback(Request $request, $id)
   {
   		$hatchback = \App\hatchback::find($id);
   		$oldVehicl2 = Session::has('vehicl2') ? Session::get('vehicl2') : null;
   		$vehicl2 = new Vehicl2($oldVehicl2);
   		$vehicl2->add($hatchback, $hatchback->id);

   		$request->session()->put('vehicl2', $vehicl2);
      //dd($request->session()->get('vehicl'));
   		return redirect()->route('twowheelers');
   }

   public function gethatchbackCart() {
    if (!Session::has('vehicl2')){
      return view('booking-hatchbackcart',['hatchbacks' => null]);
    }
    $oldVehicl2 = Session::get('vehicl2');
    $vehicl2 = new Vehicl2($oldVehicl2);
    return view('booking-hatchbackcart',['hatchbacks'=> $vehicl2->items, 'totalprice' => $vehicl2->totalprice]);
   }

   public function getCheckout()
   {   
    if (!Session::has('vehicl2')){
      return view('booking-hatchbackcart',['hatchbacks' => null]);
    } 
    $oldVehicl2 = Session::get('vehicl2');
    $vehicl2 = new Vehicl2($oldVehicl2);
    $total = 20000;
    return view('checkout4',['total' =>$total]);
   }

   public function postCheckout()
   {
    if (!Session::has('vehicl2')){
      return redirect()->route('bookingcart');
    } 
    $oldVehicl2 = Session::get('vehicl2');
    $vehicl2 = new Vehicl2($oldVehicl2);
    
    Stripe::setApiKey('sk_test_H8qhYgBFnyVUdMyncOOeXPlK');
    try{ $total = 20000;
      Charge::create(array(
      "amount" => 20000 * 100,
      "currency" => "usd",
      "source" => "tok_1AGCNRJKrtHUdksMuGuiLnO5", // obtained with Stripe.js
      "description" => "Booking a Hatchback car"
    ));
    } catch (\Exception $e){
      return redirect()->route('checkout4')->with('error', $e->getMessage());

    }
    Session::forget('vehicl2');
    return redirect()->route('acknowledge2')->with('success', 'Successfully');    
   }
}