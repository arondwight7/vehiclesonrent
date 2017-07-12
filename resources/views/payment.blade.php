@extends('layouts.deff')

@section('content')
		
		<div class="row">
        <div class="col-sm-10 col-md-8 col-md-offset-1 col-sm-offset-3">
        		<h2>Great! you just made your day awesome!</h2>
        		<hr>
        		<h3>Just few important things : </h3>
        		<hr>
        		<h4><span class="glyphicon glyphicon-ok-sign"></span>We have your Driving License Details details, it is secere so you don't have to worry about it.</h4>
        		<hr>
        		<h4><span class="glyphicon glyphicon-ok-sign"></span>Please pledge your Original Driving License to our employee at the time of pick-up.</h4>
        		<hr>
        		<h4><span class="glyphicon glyphicon-ok-sign"></span>We wiill cross check your Driving License details for security purpose before pick-up.</h4>
        		<hr>
        		<h4><span class="glyphicon glyphicon-ok-sign"></span>As you have booked a sedan you are suppose to pay a deposit of<strong> 25,000.</strong> </h4>
        		<hr>
        		<h4><span class="glyphicon glyphicon-ok-sign"></span>This includes a insurance of Bumper-to-Bumper.</h4>
        		<hr>
        		<h4><span class="glyphicon glyphicon-ok-sign"></span>Feel free to call our customer care service 24X7</h4>
        		
               <!-- @can('attach')
                <a href="{{ url('/admin') }}">Admin Panel</a>
            @endcan-->

                <div class="clearfix">
          <div class="price pull-right">
        <a href="/checkout2/{{$samp}}" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-ok-sign"></span> Proceed to pay Deposit
        </a>
		
      </div>
  </div></br></br>
        </div>
        </div>	
@endsection