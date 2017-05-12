<?php

namespace App\Http\Controllers;
use \Stripe\stripe;
use App\sedan;
use App\Order;
use Auth;
use App\Vehicl;
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
       $sedan = sedan::find($id)->decrement('availability');
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

 //  public function deletecat($id)
   //{
    //$del = sedan::where('id',$id)->delete();
   // return back();
   //}

   public function getCheckout()
   {   
    if (!Session::has('vehicl')){
      return view('booking-cart',['sedans' => null]);
    } 
    $oldVehicl = Session::get('vehicl');
    $vehicl = new Vehicl($oldVehicl);
    $total = 25000;
    return view('checkout2',['total' =>$total]);
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

   public function postCheckout()
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
      "currency" => "usd",
      "source" => "tok_1AHn9BJKrtHUdksMHyj4cSkp", // obtained with Stripe.js
      "description" => "Booking a sedan car"
    ));
      $order = new Order();
      $order->vehicl = serialize($vehicl);
      //$order->name = $request->input('name');
      $order->payment_id = $charge->id;

      Auth::user()->orders()->save($order);
    } catch (\Exception $e){
      return redirect()->route('checkout2')->with('error', $e->getMessage());

    }
    Session::forget('vehicl');
    return redirect()->route('acknowledge')->with('success', 'Payment done Successfully');    
   }

   
}
