<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use \Stripe\Charge;
use App\hatchback;
use App\Vehicl2;
use App\vehicle;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Order;
use Auth;
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
      
   		$hatchback = hatchback::find($id);
       if($hatchback->availability <= 0)
      {
        return back()->with('flash_message', 'Oops! Selected car not avaialable for this time slot. Try our other variants');
      }
      else
   		$oldVehicl2 = Session::has('vehicl2') ? Session::get('vehicl2') : null;
   		$vehicl2 = new Vehicl2($oldVehicl2);
   		$vehicl2->add($hatchback, $hatchback->id);
      //$hatchback = hatchback::find($id)->decrement('availability');

   		$request->session()->put('vehicl2', $vehicl2);
      //dd($request->session()->get('vehicl'));
   		return back();

   }

	
	
   public function gethatchbackCart() {
    if (!Session::has('vehicl2')){
      return view('booking-hatchbackcart',['hatchbacks' => null]);
    }
    $oldVehicl2 = Session::get('vehicl2');
    $vehicl2 = new Vehicl2($oldVehicl2);
    
    return view('booking-hatchbackcart',['hatchbacks'=> $vehicl2->items, 'totalprice' => $vehicl2->totalprice]);
   }

   public function getCheckout($vregno)
   {   
    if (!Session::has('vehicl2')){
      return view('booking-hatchbackcart',['hatchbacks' => null]);
    } 
    $oldVehicl2 = Session::get('vehicl2');
    $vehicl2 = new Vehicl2($oldVehicl2);
    $total = 20000;
    return view('checkout4',compact('total','vregno'));
   }

   public function postCheckout(Request $request)
   {
    if (!Session::has('vehicl2')){
      return redirect()->route('bookingcart');
    } 
    $oldVehicl2 = Session::get('vehicl2');
    $vehicl2 = new Vehicl2($oldVehicl2);
    
    Stripe::setApiKey('sk_test_H8qhYgBFnyVUdMyncOOeXPlK');
    try{ $total = 20000;
      $charge = Charge::create(array(
      "amount" => 20000 * 100,
      "currency" => "usd",
      "source" => "tok_1AOrzSJKrtHUdksMdq772vWt", // obtained with Stripe.js
      "description" => "Booking a Hatchback car"
    ));
      $order = new Order();
      $order->vehicl = serialize($vehicl2);
      $order->name = $request->input('vregno');
      $order->payment_id = $charge->id;

      Auth::user()->orders()->save($order);
	  $ve = vehicle::where('vregno','=',$request->input('vregno'))->select('vname')->first();
	  $hatchback = hatchback::where('vehiclename','=',$ve->vname)->decrement('availability');
	  vehicle::where('vregno','=',$request->input('vregno'))->update(['available'=>'1']);
    } catch (\Exception $e){
      return redirect('checkout4/'.$request->input('vregno').'/')->with('error', $e->getMessage());

    }
    Session::forget('vehicl2');
    return redirect()->route('acknowledge2')->with('success', 'Successfully');    
   }
}