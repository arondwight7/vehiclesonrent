<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class customerController2 extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

     public function insert()
     {
      $ins = new customer;
      $ins->name = Input::get('name');
      $ins->email = Input::get('email');  
      $ins->phoneno = Input::get('phone');
      $ins->address = Input::get('address');
      $ins->vehicletaken = Input::get('vehicletaken');
      $ins->bprice = Input::get('bprice');
      $ins->deposit = Input::get('deposit');
      $ins->excessph = Input::get('excessph');
      $ins->dl = Input::get('dl');
      $ins->exp = Input::get('exp');
      $ins->pick = Input::get('pick');
      $ins->picktime = Input::get('picktime');

      $ins->save();
      return view('payment2');
    }
      
}
