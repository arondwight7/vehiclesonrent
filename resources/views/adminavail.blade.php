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
                        <li><h1  style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Quick Availability</h1></li>
                        <div class="crumbs">

                    <ul>
                        <li><a href="{{ url('/admin') }}">Admin Home</a></li>
                        <li><a href="#">Attach vehicles</a></li>
                        <li><a href="#">Owner Form</a></li>
                        <li><a href="{{ url('/settlepayment') }}">Settle Payment</a></li>
                    </ul>
                </div>
                    </ul>
                </div>
                    
                    <div class="wrap-container">
                <div class="crumbs">
                    <h3>Hatchback</h3>
                <table class="table table-hover" border="1">
                    <tr>
                        
                        <th>Car Name</th>
                        <th>Availability</th>
                         @foreach($havail as $value)
                        <tr>
                            <td>{{ $value->vehiclename }}</td>
                            <td>{{ $value->availability }}</td>
                        </tr>
                        @endforeach
                    </tr>
                        
                </table>

                <h3>Sedan</h3>
                <table class="table table-hover" border="1">
                    <tr>
                        
                        <th>Car Name</th>
                        <th>Availability</th>
                         @foreach($seavail as $value)
                        <tr>
                            <td>{{ $value->vehiclename }}</td>
                            <td>{{ $value->availability }}</td>
                        </tr>
                        @endforeach
                    </tr>
                    
                </table>

                <h3>Suv</h3>
                <table class="table table-hover" border="1">
                    <tr>
                        
                        <th>Car Name</th>
                        <th>Availability</th>
                        
                    </tr>
                    @foreach($savail as $value)
                        <tr>
                            <td>{{ $value->vehiclename }}</td>
                            <td>{{ $value->availability }}</td>
                        </tr>
                        @endforeach
                </table>

                <h3>Bikes</h3>
                <table class="table table-hover" border="1">
                    <tr>
                        
                        <th>Bike Name</th>
                        <th>Availability</th>
                        
                    </tr>
                    @foreach($gavail as $value)
                        <tr>
                            <td>{{ $value->vehiclename }}</td>
                            <td>{{ $value->availability }}</td>
                        </tr>
                        @endforeach
                </table>
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
