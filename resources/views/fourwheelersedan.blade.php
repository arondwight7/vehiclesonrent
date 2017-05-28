@extends('layouts.def')

@section('content')
<div class="wrap-container clearfix">
        <div id="main-content">
          <div class="crumbs">
            <ul>
              <li><a href="{{ url('/twowheelers') }}">Hatchbacks</a></li>
              <li><a href="{{ url('/fourwheelersedan') }}">Sedans</a></li>
              <li><a href="{{ url('/fourwheelersuv') }}">SUVs</a></li></ul>
             <div class="price pull-right">
             <ul>
              <li><a href="{{ route('sedan.bookingCart') }}">Proceed</a></li><span class="badge">{{Session::has('vehicl') ? Session::get('vehicl')->totalQty : '' }}</span>
            </ul>
          </div>
          </div>
          @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                  </div>
                @endif
          
        </div>
      </div>
 @foreach($sedans->chunk(3) as $sedanchunk)
  <div class="row">
  @foreach($sedanchunk as $sedan)  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$sedan->imagepath}}" alt="...">
      <div class="caption">
        <h3>{{$sedan->vehiclename}}</h3>
        <div class="description"><p>Transmission : {{$sedan->transmission}}</p></div>
          <div class="description"><p>Fuel : {{$sedan->fuel}}</p>
        </div>
        <div class="description"><p>Seaters : {{$sedan->seats}}</p></div>
        @can('attach')
                <p id="available">Availability : {{$sedan->availability}}</p>
            @endcan
        <div class="clearfix">
          <div class="price pull-left">{{$sedan->price}} / 8 hours</div>
          <h5>Excess 230/hour</h5>
          <p><a href="{{ route('sedan.bookasedan', ['id' => $sedan->id]) }}" class="btn btn-info pull-right" role="button">Select this one</a> </p>
        </div>
        
      </div>
    </div>
  </div>
   @endforeach
</div>
@endforeach

@stop