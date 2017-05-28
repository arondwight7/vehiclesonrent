@extends('layouts.def')

@section('content')
	
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h1>My Orders</h1>
					<div class="panel panel-warning">
					  <div class="panel-body">
					    Bookings Made by you
					    <hr>
					    <table class="table">
					  			<tr>
					  				<th>Booking time</th>
					  				<th>Vehicle</th>
					  				<th>Payment ID</th>
					  				<th></th>
					  			</tr>
					  			
					  			@foreach($orders as $order)
					  		@foreach($order->vehicl->items as $item)
						  		<tr>
						  			<td>{{$order->created_at}}</td>
						  			<td >
						  			 {{$item['item']['vehiclename']}} 
						  			</td>
						  			<td>{{$order->payment_id}}</td>
						  			<!--<td><a href="">Request an acknowledgement</a></td>-->
						  		</tr>
						  	@endforeach	
						  	 @endforeach	
							</table>
					  
					 
					    
					  </div>
					  
					  <div class="panel-footer">
					  	
					  		
					  </div>	
					</div>		</br>
					 <div class="price pull-right">
					 	<a href="{{ url('/feedback') }}"
                                <button type="submit" class="btn btn-success">Give Feedback</button>  
      					</a>
      				</div>
				</br></br></br></br></br></br></br></br>		
			</div>
		</div>
	
@endsection