@extends('layouts.def')

@section('content')
		
		<div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        		<h1>Feedback</h1>
        		
        	
        		
        		<form action="/feedsuccess" method="post" id="checkout-form">
                                <div class="row">
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <input type="hidden" name="name" value="{{Auth::user()->name}}" id="name" class="form-control" />
                                                        
                                                </div> 
                                        </div>
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <input type="hidden" name="email" value="{{Auth::user()->email}}" id="email" class="form-control" />
                                                        
                                                </div> 
                                        </div>
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <label for="name">Feedback</label>
                                                        <input type="textarea" name="feedback"  class="form-control" required="required">
                                                </div> 
                                        </div>
                                       
                                </div>
                                {{ csrf_field()}}
                                <div class="price pull-right">
                                <button type="submit" class="btn btn-success">Proceed</button>  
      </div></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	
        		</form>
        </div>
        </div>	
@endsection

