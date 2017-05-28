@extends('layouts.def')

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
                <table class="table table-hover" border="1">
                    <tr>
                        <th>Name</th>
                        <th>Driving License Number</th>
                        <th>Pick-up Date</th>
                        <th>Pick-upTime</th>
                    </tr>
                    @foreach($settle as $value)
                    <tr>
                        <td>{{$value->name}} </td>
                        <td>{{$value->dl}} </td>
                        <td>{{$value->pick}} </td>
                        <td>{{$value->picktime}}:00 </td>
                        <td><a href="settlepayment2/{{ $value->email }}"><span class="btn btn-primary">Settle</span></a></td>
                    </tr>
                    @endforeach
                </table></br></br></br></br>
                </div>
            </div>
            </div>
        </section>
       </div>
        </div>
    </div>
</div>
@stop
