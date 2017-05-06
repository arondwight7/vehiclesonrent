<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>VehiclesOnRent</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | Zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
	
	
</head>

<body class="home-page" id="app-layout">
	<nav class="navbar navbar-default navbar-static-top">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/twowheelers') }}">Two Wheelers</a></li>
                    <li><a href="{{ url('/twowheelers') }}">Four Wheelers</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logot') }}"><i class="fa fa-book fa-fw"></i>&nbsp;My Policy</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp;Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    
                </ul>
			</div>
			
		</div>
		@yield('content')
		<!--////////////////////////////////////Container-->
		<!--////////////////////////////////////Footer-->
		<footer>
			
			<div class="copyright">
				<div class="zerogrid wrapper">
					Copyright @ VehiclesOnRent 
					<ul class="quick-link">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
</nav>
	
</body>
</html>