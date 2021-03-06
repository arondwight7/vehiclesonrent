<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use \Stripe\Charge;
use App\suv;
use App\Vehicl1;
use App\vehicle;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Order;
use Auth;

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
      if($suv->availability <= 0)
      {
        return back()->with('flash_message', 'Oops! Selected car not avaialable for this time slot. Try our other variants');
      }
      else
   		$oldVehicl1 = Session::has('vehicl1') ? Session::get('vehicl1') : null;
   		$vehicl1 = new Vehicl1($oldVehicl1);
   		$vehicl1->add($suv, $suv->id);
       //$suv = suv::find($id)->decrement('availability');
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

   public function getCheckout($vregno)
   {   
    if (!Session::has('vehicl1')){
      return view('booking-suvcart',['suvs' => null]);
    } 
    $oldVehicl1 = Session::get('vehicl1');
    $vehicl1 = new Vehicl1($oldVehicl1);
    $total = 30000;
    return view('checkout3',compact('total','vregno'));
   }

   public function postCheckout(Request $request)
   {
    if (!Session::has('vehicl1')){
      return redirect()->route('bookingsuvcart');
    } 
    $oldVehicl1 = Session::get('vehicl1');
    $vehicl1 = new Vehicl1($oldVehicl1);
    
    Stripe::setApiKey('sk_test_H8qhYgBFnyVUdMyncOOeXPlK');
    try{ $total = 30000;
      $charge = Charge::create(array(
      "amount" => 30000 * 100,
      "currency" => "usd",
      "source" => "tok_1Af6EHJKrtHUdksMw9WSRWrr", // obtained with Stripe.js
      "description" => "Booking a SUV car"
    ));
      $order = new Order();
      $order->vehicl = serialize($vehicl1);
      $order->name = $request->input('vregno');
      $order->payment_id = $charge->id;

      Auth::user()->orders()->save($order);
	  $ve = vehicle::where('vregno','=',$request->input('vregno'))->select('vname')->first();
	  $suv = suv::where('vehiclename','=',$ve->vname)->decrement('availability');
	  vehicle::where('vregno','=',$request->input('vregno'))->update(['available'=>'1']);
    } catch (\Exception $e){
      return redirect('checkout3/'.$request->input('vregno').'/')->with('error', $e->getMessage());

    }
    Session::forget('vehicl');
    return redirect()->route('acknowledge1')->with('success', 'Successfully');    
   }
}
