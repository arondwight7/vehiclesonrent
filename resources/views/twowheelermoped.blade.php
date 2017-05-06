@extends('layouts.def')

@section('content')
<div class="wrap-container clearfix">
        <div id="main-content">
          <div class="crumbs">
            <ul>
              <li><a href="{{ url('/twowheelermoped') }}">Mopeds</a></li>
              <li><a href="{{ url('/twowhellergear') }}">Gear Bikes</a></li>
             <ul>
              <li><a href="{{ route('moped.bookingCart') }}">Proceed</a></li><span class="badge">{{Session::has('vehicl') ? Session::get('vehicl')->totalQty : '' }}</span>
            </ul>
          </div>
          
          
        </div>
      </div>
 @foreach($mopeds->chunk(3) as $mopedchunk)
  <div class="row">
  @foreach($mopedchunk as $moped)  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$moped->imagepath}}" alt="...">
      <div class="caption">
        <h3>{{$moped->vehiclename}}</h3>
        <div class="description"><p>Transmission : {{$moped->transmission}}</p></div>
          <div class="description"><p>Fuel : {{$moped->fuel}}</p>
        </div>
        <div class="description"><p>Seaters : {{$moped->seats}}</p></div>
        <div class="clearfix">
          <div class="price pull-left">{{$moped->price}}/day</div>
          <p><a href="#" class="btn btn-info pull-right" role="button">Book</a> </p>
        </div>
        
      </div>
    </div>
  </div>
   @endforeach
</div>
@endforeach

@stop