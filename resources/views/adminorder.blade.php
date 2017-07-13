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
                        <li><h1  style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Orders</h1></li>
                        <div class="crumbs">

                  
                </div>
                    </ul>
                </div>
                    
                    <div class="wrap-container">
                <div class="crumbs">
                  
                <table class="table table-hover" border="1">
                    <tr>
                        
                        <th>Sl no.</th>
                        
                        <th>User ID</th>
                        <th>Order made on</th>
                        <th>Vehicle</th>
						<th>Payment ID</th>
						<th>Status</th>
						
                         @foreach($or as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                           
                            <td>{{ $value->user_id }}</td>
                            <td>{{ $value->created_at }}</td>
                            
							<td>{{ $value->name }}</td>
							<td>{{ $value->payment_id }}</td>
							<td>{{ $value->cancel }}</td>
                        </tr>
                        @endforeach
                    </tr>
                        
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
