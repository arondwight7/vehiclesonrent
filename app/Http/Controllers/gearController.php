<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use \Stripe\Charge;
use App\gear;
use App\Vehicl3;
use App\vehicle;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Order;
use Auth;
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
      if($gear->availability <= 0)
      {
        return back()->with('flash_message', 'Oops! Selected car not avaialable for this time slot. Try our other variants');
      }
      else
   		$oldVehicl3 = Session::has('vehicl3') ? Session::get('vehicl3') : null;
   		$vehicl3 = new Vehicl3($oldVehicl3);
   		$vehicl3->add($gear, $gear->id);
       //$gear = gear::find($id)->decrement('availability');
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

   public function getCheckout($vregno)
   {   
    if (!Session::has('vehicl3')){
      return view('booking-gearcart',['hatchbacks' => null]);
    } 
    $oldVehicl3 = Session::get('vehicl3');
    $vehicl3 = new Vehicl3($oldVehicl3);
    $total = 5000;
    return view('checkout5',compact('total','vregno'));
   }

   public function postCheckout(Request $request)
   {
    if (!Session::has('vehicl3')){
      return redirect()->route('bookinggearcart');
    } 
    $oldVehicl3 = Session::get('vehicl3');
    $vehicl3 = new Vehicl3($oldVehicl3);
    
    Stripe::setApiKey('sk_test_H8qhYgBFnyVUdMyncOOeXPlK');
    try{ $total = 5000;
      $charge = Charge::create(array(
      "amount" => 5000 * 100,
      "currency" => "usd",
      "source" => "tok_1AL2tMJKrtHUdksMKkjFGkpr", // obtained with Stripe.js
      "description" => "Booking a bike"
    ));
      $order = new Order();
      $order->vehicl = serialize($vehicl3);
      $order->name = $request->input('vregno');
      $order->payment_id = $charge->id;

      Auth::user()->orders()->save($order);
	  $ve = vehicle::where('vregno','=',$request->input('vregno'))->select('vname')->first();
	  $gear = gear::where('vehiclename','=',$ve->vname)->decrement('availability');
	  vehicle::where('vregno','=',$request->input('vregno'))->update(['available'=>'1']);
    } catch (\Exception $e){
      return redirect('checkout5/'.$request->input('vregno').'/')->with('error', $e->getMessage());

    }
    Session::forget('vehicl3');
    return redirect()->route('acknowledge3')->with('success', 'Successfully');    
   }
}
