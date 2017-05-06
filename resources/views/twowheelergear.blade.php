@extends('layouts.def')

@section('content')
<div class="wrap-container clearfix">
        <div id="main-content">
          <!--<div class="crumbs">
            <ul>
              <li><a href="{{ url('/twowheelermoped') }}">Mopeds</a></li>
              <li><a href="{{ url('/twowhellergear') }}">Gear Bikes</a></li>
             
             <ul>
              <li><a href="{{ route('sedan.bookingCart') }}">Proceed</a></li><span class="badge">{{Session::has('vehicl') ? Session::get('vehicl')->totalQty : '' }}</span>
            </ul>
          </div>-->
          <li><a href="{{ route('gear.bookingCart') }}">Proceed</a></li><span class="badge">{{Session::has('vehicl3') ? Session::get('vehicl3')->totalQty : '' }}</span>
          
        </div>
      </div>
 @foreach($gears->chunk(3) as $gearchunk)
  <div class="row">
  @foreach($gearchunk as $gear)  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$gear->imagepath}}" alt="...">
      <div class="caption">
        <h3>{{$gear->vehiclename}}</h3>
        <div class="description"><p>Transmission : {{$gear->transmission}}</p></div>
          <div class="description"><p>Fuel : {{$gear->fuel}}</p>
        </div>
        <div class="description"><p>Seaters : {{$gear->seats}}</p></div>
        <div class="clearfix">
          <div class="price pull-left">{{$gear->price}}/day</div>
          <p><a href="{{ route('sedan.bookagear', ['id' => $gear->id]) }}" class="btn btn-info pull-right" role="button">Book</a> </p>
        </div>
        
      </div>
    </div>
  </div>
   @endforeach
</div>
@endforeach

@stop