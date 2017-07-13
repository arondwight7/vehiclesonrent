@extends('layouts.deff')

@section('content')
    @if(Session::has('vehicl2'))
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
               
                    <li class="lists-group-item">
                         @foreach($hatchbacks as $hatchback)         
                        <h1>{{$hatchback['item']['vehiclename']}}</h1>
                        @endforeach
                        <!--<div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs dropdoown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                    <li>sasd</li>>
                            </ul>
                        </div>-->
                    </li>
                
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
           
           <!--<strong>{{$totalprice}}</strong>-->
        <form name="form1" id="ff" method="post" action="/payment2">
                                       {{ csrf_field() }}    
                                            <label class="row">
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                      
														<input type="hidden" name="name" id="name" value="{{Auth::user()->name}}" placeholder="Enter name as on Driving License" required="required" pattern="[A-Za-z][A-Za-z\s]*" />
                                                    </div>
                                                </div>
												<div class="col-1-2">
                                                    <div class="wrap-col">
													
                                                        <input type="hidden" name="email" value="{{Auth::user()->email}}" id="email" placeholder="Enter email" required="required" />
                                                    </div>
                                                </div>
							                    <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="dl" id="dl" placeholder="Enter Driving License number" pattern="[A-Za-z]{2}[0-9]{13}" required="required"  />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" pattern="[7-9]{1}[0-9]{9}" required="required"  />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="textarea" name="address" id="address" placeholder="Enter Address" required="required" />
                                                    </div>
                                                </div>
                                                @foreach($hatchbacks as $hatchback)         
                        
                        
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" value="{{$hatchback['item']['vehiclename']}}" name="vehicletaken" id="vehicletaken"  required="required" readonly />
                                                    </div>
                                                </div>
                                                
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="hidden" value="{{$hatchback['item']['price']}}" name="bprice" id="bprice"  required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="hidden" value="{{$hatchback['item']['deposit']}}" name="deposit" id="deposit"  required="required" />
                                                    </div>
                                                </div>
                                                
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="hidden" value="{{$hatchback['item']['excessph']}}" name="excessph" id="excessph"  required="required" />
                                                    </div>@endforeach
                                                </div>

                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <label>Driving License Exp Date</label>
                                                        <input type="date" name="exp" id="exp"  required="required" min="2017-07-10" max="2030-05-31" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <label>Pick up Date</label>
                                                    <div class="wrap-col">
                                                        <input type="date" name="pick" id="pick" required="required" min="2017-06-14" max="2017-06-15" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    
                                                    <div class="wrap-col">
                                                        <select name="picktime" id="picktime"  required="required">
                                                          <option value="Pick Time">Pick Time</option>
                                                          <option value="0">12 AM</option>
                                                          <option value="1">01 AM</option>
                                                          <option value="2">02 AM</option>
                                                          <option value="3">03 AM</option>
                                                          <option value="4">04 AM</option>
                                                          <option value="5">05 AM</option>
                                                          <option value="6">06 AM</option>
                                                          <option value="7">07 AM</option>
                                                          <option value="8">08 AM</option>
                                                          <option value="9">09 AM</option>
                                                          <option value="10">10 AM</option>
                                                          <option value="11">11 AM</option>
                                                          <option value="12">12 PM</option>
                                                          <option value="13">01 PM</option>
                                                          <option value="14">02 PM</option>
                                                          <option value="15">03 PM</option>
                                                          <option value="16">04 PM</option>
                                                          <option value="17">05 PM</option>
                                                          <option value="18">06 PM</option>
                                                          <option value="19">07 PM</option>
                                                          <option value="20">08 PM</option>
                                                          <option value="21">09 PM</option>
                                                          <option value="22">10 PM</option>
                                                          <option value="23">11 PM</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </label>
                                                                                        <center><input class="sendButton" type="submit" name="submitcontact" value="Next"></center>
                                        </form>
            
        </div>
    </div>
    <hr>
    
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
           
        </div>
    </div>
    @endif
@endsection
