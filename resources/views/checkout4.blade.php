@extends('layouts.def')

@section('content')
		
		<div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        		<h1>Laravel</h1>
        		<h1>Deposit {{$total}}</h1>>
        		<div id="charge-error" class="alert alert-danger {{!Session::has('error') ? 'hidden' : ''}}">
        			{{ Session::get('error')}}
        		</div>
        		<form action="/acknowledge2" method="post" id="checkout-form">
        			<div class="row">
        				<div class="col-xs-12">
	        				<div class="form-group">
	        					<label for="name">Name On Card</label>
	        					<input type="text" id="card-name" class="form-control" required>
	        				</div> 
        				</div>
        				<div class="col-xs-12">
	        				<div class="form-group">
	        					<label for="name">Card Number</label>
	        					<input type="text" id="card-number" class="form-control" required>
	        				</div> 
        				</div>
        				<div class="col-xs-12">
	        				<div class="form-group">
	        					<label for="name">Expiration month</label>
	        					<input type="text" id="card-expiry-month" class="form-control" required>
	        				</div> 
        				</div>
        				<div class="col-xs-12">
	        				<div class="form-group">
	        					<label for="name">Expiration Year</label>
	        					<input type="text" id="card-expiry-year" class="form-control" required>
	        				</div> 
        				</div>
        				<div class="col-xs-12">
	        				<div class="form-group">
	        					<label for="name">CVC</label>
	        					<input type="text" id="card-cvc" class="form-control" required>
	        				</div> 
        				</div>

        			</div>
        			{{ csrf_field()}}
        			<button type="submit" class="btn btn-success">Proceed</button>	
        		</form>
        </div>
        </div>	
@endsection

@section('scripts')
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript" src="{{ URL::to('js/checkout.js')}}"></script>
@endsection