@extends('layouts.def')

@section('content')
<div class="wrap-container clearfix">
        <div id="main-content">
          <div class="crumbs">
            <ul>
              <li><a href="{{ url('/twowheelers') }}">Hatchbacks</a></li>
              <li><a href="{{ url('/fourwheelersedan') }}">Sedans</a></li>
              <li><a href="{{ url('/fourwheelersuv') }}">SUVs</a></li>
               </ul>
               <div class="price pull-right">
             <ul>
              <li><a href="{{ route('suv.bookingCart') }}">Proceed</a></li><span class="badge">{{Session::has('vehicl1') ? Session::get('vehicl1')->totalQty : '' }}</span>
            </ul>
            
          </div>
          @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                  </div>
                @endif
          
        </div>
      </div>
 @foreach($suvs->chunk(3) as $suvchunk)
  <div class="row">
  @foreach($suvchunk as $suv)  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$suv->imagepath}}" alt="...">
      <div class="caption">
        <h3>{{$suv->vehiclename}}</h3>
        <div class="description"><p>Transmission : {{$suv->transmission}}</p></div>
          <div class="description"><p>Fuel : {{$suv->fuel}}</p>
        </div>
        <div class="description"><p>Seaters : {{$suv->seats}}</p></div>
        @can('attach')
                <p id="available">Availability : {{$suv->availability}}</p>
            @endcan
        <div class="clearfix">
          <div class="price pull-left">{{$suv->price}} / 8 hours</div></br> 
          <h5>Excess 250/hour</h5>
          <p><a href="{{ route('sedan.bookasuv', ['id' => $suv->id]) }}" class="btn btn-info pull-right" role="button">Select this one</a> </p>
        </div>
        
      </div>
    </div>
  </div>
   @endforeach
</div>
@endforeach

@stop