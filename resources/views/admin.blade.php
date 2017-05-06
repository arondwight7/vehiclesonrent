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
                        <li><a href="#">Attach vehicles</a></li>
                        <li><a href="#">Owner Form</a></li>
                    </ul>
                </div>
                    </ul>
                </div>
                    
                            
                               <div class="zerogrid">
                    <div class="row">
                        <h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Attach Panel</h1>
                        
                        <div class="col-1-3">
                            <img src="images/ad1.png" class="img-responsive" alt="">
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
                                                        <input type="text" name="name" id="name" placeholder="Enter name" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="email" name="email" id="email" placeholder="Enter email" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="phone" id="name" placeholder="Enter Phone Number" required="required" pattern="[0-9]{10}" />
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
                                                        <input type="text" name="city" id="email" placeholder="Enter City" required="required"  />
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
                </div>
            </div>
        </section>
       </div>
        </div>
    </div>
</div>
@stop
