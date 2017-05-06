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
                        <li><a href="#">attach steps</a></li>
                        <li><a href="#">Owner Information</a></li>
                        <li><a href="#">Vehicles Information</a></li>
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
                                    <h3 style="margin: 20px 0 20px 30px">Vehicle Attachment Form</h3>
                                    <div id="contact_form">
                                        <form name="form1" id="ff" method="post" action="/attachsuccess">
                                            {{ csrf_field() }}
                                            <label class="row">
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="vregno" id="name" placeholder="Enter Vehicle Register number" required="required" maxlength="11" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="vname" id="name" placeholder="Enter Vehicle name" required="required"  "/>
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input list="vehicles" name="vtype" placeholder="Vehicle Type">
                                                          <datalist id="vehicles">
                                                            <option value="Two Wheelers">
                                                            <option value="Four Wheelers">
                                                            <option value="">
                                                          </datalist>
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="vmake" id="name" placeholder="Year Of Make" required="required" maxlength="4" />
                                                    </div>
                                                </div></br>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="vcc" id="name" placeholder="Displacement" required="required" maxlength="4" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input list="vehiclescat" name="vcat" placeholder="Vehicle Category">
                                                          <datalist id="vehiclescat">
                                                            <option value="Two Wheelers">
                                                                <option value="Mopeds">
                                                                <option value="With Gear">
                                                            <option value="Four Wheelers">
                                                                <option value="Hatchback">
                                                                <option value="Sedan">
                                                                <option value="SUV">
                                                            <option value="">
                                                          </datalist>
                                                    </div>
                                                </div>
                                            </label>
                                                                                        <center><input class="sendButton" type="submit" name="submitcontact" value="SUBMIT"></center>
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