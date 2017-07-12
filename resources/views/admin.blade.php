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
                        <li><a href="{{ url('/adminavail') }}">Available Cars</a></li>
                    </ul>
                </div>
				<div class="col-2-3">
                            <div class="wrap-col">
                                <div class="contact">
                                    <h3 style="margin: 20px 0 20px 30px">Owner Registration Form</h3>
                                    <div id="contact_form">
                                        <form name="form1" id="ff" method="post" action="/attach">
                                            {{ csrf_field() }}
                                            <label class="row">
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="name" id="name" placeholder="Enter name" required="required" pattern="[A-Za-z][A-Za-z\s]*" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="email" name="email" id="email" placeholder="Enter email" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="phone" id="name" placeholder="Enter Phone Number" pattern="[7-9]{1}[0-9]{9}" required="required"  />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="textarea" name="address" id="email" placeholder="Enter Address" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="pin" id="name" placeholder="Enter Pin code" required="required" pattern="[0-9]{6}" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="city" id="email" placeholder="Enter City" required="required" pattern="[A-Za-z]+$" />
                                                    </div>
                                                </div>
                                            </label>
                                                                                        <center><input class="sendButton" type="submit" name="submitcontact" value="Next"></center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </ul>
                </div>
                    
                            
                
        </section>
       </div>
        </div>
    </div>
</div>
@stop
