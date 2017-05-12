@extends('layouts.deff')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <section id="container">
            <div class="wrap-container">
                <div class="crumbs">
                    <ul>
                        <li><h1  style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Welcome Admin</h1></li>
                        <div class="crumbs">
                    <ul>
                        <li><a href="{{ url('/admin') }}">Admin Home</a></li>
                        
                        <li><a href="{{ url('/settlepayment') }}">Settle Payment</a></li>
                    </ul>
                </div>
                    
                </div>
                    <div class="wrap-container">
                <div class="crumbs">
                <table class="table table-hover" >
                    <tr>
                        <th>Name</th>
                        <th>Driving License Number</th>
                        <th>Pick-up Date</th>
                        <th>Pick-upTime</th>
                        <th></th>
                    </tr>
                    @foreach($settle1 as $value)
                    <tr>
                        <td>{{$value->name}} </td>
                        <td>{{$value->dl}} </td>
                        <td>{{$value->pick}} </td>
                        <td>{{$value->picktime}} </td>
                        
                    </tr>
                    @endforeach
                </table>        
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                
                <form action="/acknowledge1" method="post" id="checkout-form">
                               @foreach($settle1 as $value)
                                <div class="row">
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" value= "{{ $value->name}}" id="card-name" name="name" class="form-control" required="required" pattern="[A-Za-z]+$">
                                                </div> 
                                        </div>
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <label for="name">Vehicle Taken</label>
                                                        <input type="text" value= "{{ $value->vehicletaken}}" id="card-number" class="form-control" required="required" pattern="[0-9]{16}">
                                                </div> 
                                        </div>
                                        <div class="col-xs-12">
                                                <div class="form-group">
                                                        <label for="name">Number of excess hours</label>
                                                        <input type="text" id="card-number" class="form-control" required="required" pattern="[0-9]{16}">
                                                </div> 
                                        </div>

                                </div>@endforeach
                                {{ csrf_field()}}
                                <div class="price pull-right">
                                <button type="submit" class="btn btn-success">Proceed</button>  
      </div>
    
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
