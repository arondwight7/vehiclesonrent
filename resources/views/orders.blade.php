@extends('layouts.def')

@section('content')
	
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
				<h1>My Orders</h1>
					<div class="panel panel-warning">
					  <div class="panel-body">
					    Bookings Made by you
					    <hr>
					    
					  </div>
					  @foreach($orders as $order)
					  <div class="panel-footer">
					  	<ul class="list-group">
					  		@foreach($order->vehicl->items as $item)
						  		<li class="list-group-item">
						  			 {{$item['item']['vehiclename']}} <a href="">Request an acknowledgement</a>
						  		</li>
						  	@endforeach	
						</ul>
					  </div>
					  @endforeach	
					</div>		</br>
					 <div class="price pull-right">
                                <button type="submit" class="btn btn-success">Give Feedback</button>  
      				</div>
				</br></br></br></br></br></br></br></br>		
			</div>
		</div>
	
@endsection