@extends('layouts.def')

@section('content')
<div class="wrap-container clearfix">
        <div id="main-content">
        <div class="crumbs">
              <div class="price pull-right">
             <ul>
              <li><a href="{{ route('gear.bookingCart') }}">Proceed</a></li><span class="badge">{{Session::has('vehicl3') ? Session::get('vehicl3')->totalQty : '' }}</span>
            </ul>
        </div>
          </div>
          @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                  </div>
                @endif
          <hr>
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
        @can('attach')
                <p id="available">Availability : {{$gear->availability}}</p>
            @endcan
        <div class="clearfix">
          <div class="price pull-left">{{$gear->price}} / 8 hours</div>
          <h5>Excess 100/hour</h5>
          <p><a href="{{ route('sedan.bookagear', ['id' => $gear->id]) }}" class="btn btn-info pull-right" role="button">Select this one</a> </p>
        </div>
        
      </div>
    </div>
  </div>
   @endforeach
</div>
@endforeach

@stop