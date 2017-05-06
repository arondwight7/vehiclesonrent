@extends('layouts.def')

@section('content')
<div class="wrap-container clearfix">
        <div id="main-content">
          <div class="crumbs">
            <ul>
              <li><a href="{{ url('/twowheelers') }}">Hatchbacks</a></li>
              <li><a href="{{ url('/fourwheelersedan') }}">Sedans</a></li>
              <li><a href="{{ url('/fourwheelersuv') }}">SUVs</a></li>
              <li><a href="{{ route('hatchback.bookingCart') }}">Proceed</a></li><span class="badge">{{Session::has('vehicl2') ? Session::get('vehicl2')->totalQty : '' }}</span>
            </ul>
          </div>
          
          
        </div>
      </div>
 @foreach($hatchbacks->chunk(3) as $hatchbackchunk)
  <div class="row">
  @foreach($hatchbackchunk as $hatchback)  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$hatchback->imagepath}}" alt="...">
      <div class="caption">
        <h3>{{$hatchback->vehiclename}}</h3>
        <div class="description"><p>Transmission : {{$hatchback->transmission}}</p></div>
          <div class="description"><p>Fuel : {{$hatchback->fuel}}</p>
        </div>
        <div class="description"><p>Seaters : {{$hatchback->seats}}</p></div>
        <div class="clearfix">
          <div class="price pull-left">{{$hatchback->price}}/day</div>
          <p><a href="{{ route('sedan.bookahatchback', ['id' => $hatchback->id]) }}" class="btn btn-info pull-right" role="button">Book</a> </p>
        </div>
        
      </div>
    </div>
  </div>
   @endforeach
</div>
@endforeach

@endsection