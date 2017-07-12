<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bill;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class billController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

     public function insert()
     {
      $ins = new bill;
      $ins->name = Input::get('name');
      $ins->dl = Input::get('dl');
      $ins->vehicletaken = Input::get('vehicletaken');
      $ins->bprice = Input::get('bprice');
      $ins->deposit = Input::get('deposit');
      $ins->excessph = Input::get('excessph');
      $ins->excessh = Input::get('excessh');
      
      
      $ins->save();
      return redirect("settlepayment1/".Input::get('id'));
    }

    public function fdis($id)
    {
      $fd = new bill;
      $fd = bill::where('id',$id)->get();
      return view('finalacknowledgement',compact('fd'));
    }

    
}
