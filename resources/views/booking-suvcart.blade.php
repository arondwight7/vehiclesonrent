@extends('layouts.def')

@section('content')
    @if(Session::has('vehicl1'))
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($suvs as $suv)
                    <li class="lists-group-item">
                        
                        <h1>{{$suv['item']['vehiclename']}}</h1>
                        
                        <!--<div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs dropdoown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                    <li>sasd</li>>
                            </ul>
                        </div>-->
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
           
            <strong>{{$totalprice}}</strong>
        
            <form name="form1" id="ff" method="post" action="/payment1">
                                            {{ csrf_field() }}
                                            <label class="row">
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="name" id="name" placeholder="Enter name" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="email" name="email" id="email" placeholder="Enter email" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" required="required"  />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="textarea" name="address" id="address" placeholder="Enter Address" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="dl" id="dl" placeholder="Enter Driving License number" required="required"  />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="date" name="exp" id="exp" placeholder="Driving License Exp Date" required="required"  />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="date" name="pick" id="pick" placeholder="Driving License Exp Date" required="required"  />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="date" name="drop" id="drop" placeholder="Driving License Exp Date" required="required"  />
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
