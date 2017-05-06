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
                        <li><h1  style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">About us</h1></li>
                        <p>From planning a trip outside the city to moving around inside one, a new era of freedom is here with VehiclesOnRent – India’s premier self-drive car rental. So, for your next trip to sunny beaches, or to the mall for shopping or movies, hire a car from VehiclesOnRent anytime you want it. 
VehiclesOnRent provides you with the wheels to drive around at a short notice, while also offering a range of luxury car hire options to choose from. 
With all India permit for every car, you are set to drive out as far as you want to go!</p>
                    </ul>
                </div>
                <div class="zerogrid">
                    <div class="row">
                        <h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Find Us here!</h1>
                        <div class="col-full">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7777.179724141114!2d77.53002137090404!3d12.93406130136594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x694d74f6ac640acf!2sPES+University!5e0!3m2!1sen!2sin!4v1489597009793" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
                        </div>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <h3 style="margin: 20px 0">Contact Info</h3>
                                <strong>100 Feet Ring Road, Banashankari Stage III, Dwaraka Nagar, Banashankari, Bengaluru, Karnataka 560085</strong>
                                <p>Opposite Vasundara Krithika<br>
                                    Hoskerehalli</p>
                                   <p>+91 888 888 9090 <br>
                                    +91 888 888 9191</p>
                                <p>info@vehiclesonrent.com</p>
                            </div>
                        </div>
                        <div class="col-2-3">
                            <div class="wrap-col">
                                <div class="contact">
                                    <h3 style="margin: 20px 0 20px 30px">Contact Form</h3>
                                    <div id="contact_form">
                                        <form name="form1" id="ff" method="post" action="contact.php">
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
                                            </label>
                                            <label class="row">
                                                <div class="col-full">
                                                    <div class="wrap-col">
                                                    <input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="row">
                                                <div class="wrap-col">
                                                    <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
                                                    placeholder="Message"></textarea>
                                                </div>
                                            </label>
                                            <center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--////////////////////////////////////Footer-->

            </div>
        </div>
    </div>
</div>
@stop
