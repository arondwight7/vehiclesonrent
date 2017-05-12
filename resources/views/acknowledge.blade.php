@extends('layouts.deff')

@section('content')
	@if(Session::has('success'))
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
				<div id="charge-message" class="alert alert-success"> 
					{{Session::get('success')}}
				</div>

			</div>
		</div>
	@endif
	<center><h3>Great! Sit & Relax, we are on our way</h3><hr></center>
	 <section class="content-box box-2">
                    <div class="zerogrid">
                        <div class="row wrap-box"><!--Start Box-->
                            <div class="header">
                                <div class="wrapper">
                                    <h2 class="color-blue">Also have a look at our associates products</h2>
                                    <img src="images/adw.png" length="100" width="150">
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <div class="portfolio-box">
                                            <img src="images/1.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <div class="portfolio-box-caption-content">
                                                    <div class="project-category text-faded">
                                                        <!--<a href="#"></a>-->
                                                    </div>
                                                    <div class="project-name">
                                                        <a href="#">Turbo charges</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-box">
                                            <img src="images/4.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <div class="portfolio-box-caption-content">
                                                    <div class="project-category text-faded">
                                                        <!--<a href="#">Category</a>-->
                                                    </div>
                                                    <div class="project-name">
                                                        <a href="#">Bikes accessories</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <div class="portfolio-box">
                                            <img src="images/2.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <div class="portfolio-box-caption-content">
                                                    <div class="project-category text-faded">
                                                      <!--<a href="#">Category</a>-->
                                                    </div>
                                                    <div class="project-name">
                                                        <a href="#">Wheels</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-box">
                                            <img src="images/5.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <div class="portfolio-box-caption-content">
                                                    <div class="project-category text-faded">
                                                        <!--<a href="#">Category</a>-->
                                                    </div>
                                                    <div class="project-name">
                                                        <a href="#">Moto Graphics</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <div class="portfolio-box">
                                            <img src="images/3.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <div class="portfolio-box-caption-content">
                                                    <div class="project-category text-faded">
                                                        <!--<a href="#">Category</a>-->
                                                    </div>
                                                    <div class="project-name">
                                                        <a href="#">Auto paints</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-box">
                                            <img src="images/6.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <div class="portfolio-box-caption-content">
                                                    <div class="project-category text-faded">
                                                        <!--<a href="#">Category</a>-->
                                                    </div>
                                                    <div class="project-name">
                                                        <a href="#">Turbo accessories</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection