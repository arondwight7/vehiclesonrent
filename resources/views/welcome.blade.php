@extends('layouts.def')
 
    
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="container">
            <div class="content">
                <div class="custom-banner">
                <img src="images/main.jpg">
            </div>
            </div>
            </div>
            @can('add_vehicles')
                <a href="{{ url('/home') }}">Admin Panel</a>
            @endcan
            @can('ad_vehicles')
                <a href="#">Ad Vehicles</a>
            @endcan    
        </div>
        <h1>asdfghjgk</h1>
            </div>
        </div>
    </div>
</div>/
@endsection
