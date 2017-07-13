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
                        <li><h1  style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Feedback Recieved</h1></li>
                        <div class="crumbs">

                  
                </div>
                    </ul>
                </div>
                    
                    <div class="wrap-container">
                <div class="crumbs">
                  
                <table class="table table-hover" border="1">
                    <tr>
                        
                        <th>Sl no.</th>
                        
                        
                        <th>Order made on</th>
                        <th>Name</th>
						<th>Email</th>
						<th>Feedback</th>
						
                         @foreach($fb as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                           
                            
                            <td>{{ $value->created_at }}</td>
                            
							<td>{{ $value->name }}</td>
							<td>{{ $value->email }}</td>
							<td>{{ $value->feedback }}</td>
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
