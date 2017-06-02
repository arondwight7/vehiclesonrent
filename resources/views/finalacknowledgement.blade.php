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
                        <li><h1  style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Your Bill status</h1></li>
                        
                        </ul>
                        <table class="table table-bordered">
                           @foreach($fd as $v)
                            <tr>
                                <td><p class="h4">Name</p></td>
                                <td><p class="h4">{{$v->name}}<p></td>
                            </tr>
                            <!--<tr>
                                <td><p class="h4">Vehicle taken</p></td>
                                <td><p class="h4">{{$v->vehicletaken}}</p></td>
                            </tr>-->
                            <tr>
                                <td><p class="h4">Deposit Made</p></td>
                                <td><p class="h4">{{$v->deposit}}</p></td>
                            </tr>
                            <tr>
                                <td> <p class="h4">Minimum Charge(first 8 hours)</p></td>
                                <td><p class="h4">{{$v->bprice}}</p></td>
                            </tr>
                            <tr>
                                <td><p class="h4">Number of extra hours driven</p></td>
                                <td><p class="h4">{{$v->excessh}}</p></td>
                            </tr>
                            <tr>
                                <td><p class="h4">Extra Charges</p></td>
                                <td><p class="h4">{{$v->excessph*$v->excessh}}</p></td>
                                
                            </tr>
                            <tr>
                                <td><p class="h2">Total</p></td>
                                <td><p class="h2">{{$v->bprice+($v->excessph*$v->excessh)}}</p></td>
                                
                            </tr>@endforeach
                           
                        </table>
                
            </div>
        </section>
       </div>
        </div>
    </div>
</div>
@stop
