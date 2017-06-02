<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use App\sedan;
use App\Order;
use Auth;
use App\Vehicl;
use App\vehicle;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use \Stripe\Charge;
class sedanController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
         
     }

    public function getsedan()
    { 
      
    	$sedans =\App\sedan::all();
    	return view('fourwheelersedan', ['sedans' => $sedans]);
   }

   public function getbookasedan(Request $request, $id)
   {
   		$sedan = \App\sedan::find($id);
      if($sedan->availability <= 0)
      {
        return back()->with('flash_message', 'Oops! Selected car not avaialable for this time slot. Try our other variants');
      }
      else
   		$oldVehicl = Session::has('vehicl') ? Session::get('vehicl') : null;
   		$vehicl = new Vehicl($oldVehicl);
   		$vehicl->add($sedan, $sedan->id);
       //$sedan = sedan::find($id)->decrement('availability');
   		$request->session()->put('vehicl', $vehicl);
      //dd($request->session()->get('vehicl'));
   		return redirect()->route('fourwheelersedan');
   }


   
   public function getCart() {
    if (!Session::has('vehicl')){
      return view('booking-cart',['sedans' => null]);
    }
    $oldVehicl = Session::get('vehicl');
    $vehicl = new Vehicl($oldVehicl);
    return view('booking-cart',['sedans'=> $vehicl->items, 'totalprice' => $vehicl->totalprice]);
   }

   public function getCheckout($vregno)
   {   
    if (!Session::has('vehicl')){
      return view('booking-cart',['sedans' => null]);
    } 
    $oldVehicl = Session::get('vehicl');
    $vehicl = new Vehicl($oldVehicl);
    $total = 25000;
	
    return view('checkout2',compact('total','vregno'));
   }

   public function getProfile()
   {
    $orders = Auth::user()->orders;
    $orders->transform(function($order,$key){
      $order->vehicl = unserialize($order->vehicl);
      return $order;
    });
    return view('orders',['orders' => $orders]);
   }

   public function postCheckout(Request $request)
   {
    if (!Session::has('vehicl')){
      return redirect()->route('bookinghatchbackcart');
    } 
    $oldVehicl = Session::get('vehicl');
    $vehicl = new Vehicl($oldVehicl);
    
    Stripe::setApiKey('sk_test_H8qhYgBFnyVUdMyncOOeXPlK');
    try{ $total = 25000;
      $charge = Charge::create(array(
      "amount" => 25000 * 100,
      "source" => "tok_1APkXpJKrtHUdksME4IBe0CJ", // obtained with Stripe.js
      "currency" => "usd",
      "description" => "Booking a sedan car"
    ));
      $order = new Order();
      $order->vehicl = serialize($vehicl);
      $order->name = $request->input('vregno');
      $order->payment_id = $charge->id;
	  
      Auth::user()->orders()->save($order);
	  $ve = vehicle::where('vregno','=',$request->input('vregno'))->select('vname')->first();
	  $sedan = sedan::where('vehiclename','=',$ve->vname)->decrement('availability');
	  vehicle::where('vregno','=',$request->input('vregno'))->update(['available'=>'1']);
    } catch (\Exception $e){
      return redirect('checkout2/'.$request->input('vregno').'/')->with('error', $e->getMessage());
    }
    Session::forget('vehicl');
    return redirect('acknowledge')->with('success', 'Payment done Successfully');    
   }

   
}
