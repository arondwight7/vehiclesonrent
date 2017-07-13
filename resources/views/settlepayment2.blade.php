@extends('layouts.deff')

@section('content')
<!--<<script type="text/javascript">
function cal()
{
    var hrs = document.getElementById("excessh").value;
    var bchrg = document.getElementById("basiccharge").value;
    var exprice = document.getElementById("excessph").value;
    var total = (hrs*exprice)+bchrg;
    document.getElementById("totaltext").innerHTML = total;
    return total;

}

</script>-->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <section id="container">
            <div class="wrap-container">
                <div class="crumbs">
                    <ul>
                        <li><h1  style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Generate Bill</h1></li>
                        <div class="crumbs">
                    <!--<ul>
                        <li><a href="{{ url('/admin') }}">Admin Home</a></li>
                        
                        <li><a href="{{ url('/settlepayment') }}">Settle Payment</a></li>
                    </ul>-->
                </div>
                    
                </div>
                    <div class="wrap-container">
                <div class="crumbs">
                        
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                  
                <form action="/finalacknowledgement/{id}" method="post" id="finalack">
                           @if($settle1)  
                                <div class="row">
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" value= "{{ $settle1->name}}" id="card-name" name="name" class="form-control" required="required" readonly>
                                                </div> 
                                        </div>
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        
                                                        <input type="hidden" name="dl" value= "{{ $settle1->dl}}" id="dl" name="dl" class="form-control" required="required"  readonly>
                                                </div> 
                                        </div>
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <label for="name">Vehicle Taken</label>
                                                        <input type="text" name="vehicletaken" value= "{{ $settle1->vehicletaken}}" id="vehicletaken" class="form-control" required="required" readonly>
                                                </div> 
                                        </div>
                                        
                                        <div class="col-xs-12">

                                                <div class="form-group">
                                                   
                                                        <label for="name">Basic Charges</label>
                                                        <input type="text" name="bprice" id="bprice" value="{{ $settle1->bprice}}"class="form-control" required="required" readonly>
                                                  
                                                </div> 
                                        </div>
                                        
                                        
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                    
                                                        <label for="name">Extra Charges</label>
                                                        <input type="text" name="excessph" value= "{{ $settle1->excessph}}" id="excessph" class="form-control" required="required" readonly>
														<input type="hidden" name="id" value= "{{$id}}">
                                                </div> 
												
                                        </div>
                                        <div class="col-xs-12">

                                                <div class="form-group">
                                                   
                                                        
                                                        <input type="hidden" name="deposit" id="deposit" value="{{$settle1->deposit}}"class="form-control" required="required">
                                                  
                                                </div> 
                                        </div>
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <label for="name">Number of excess hours</label>
                                                        <input type="text" name="excessh" id="excessh" col-xs-12class="form-control" required="required">
                                                </div> 
                                        </div>@endif
                                        <div class="price pull-left">
                                            <button type="submit" class="btn btn-success" >Calculate</button>  
                                        </div>

                                        
    
                                </div>
                                {{ csrf_field()}}
                                
                </form>

        </div>
        </div>
                </div>
            </div>
            </div>
        </section>
       </div>
        </div>
    </div>
</div>
@stop
