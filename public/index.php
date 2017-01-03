<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

//require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

//$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

//$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

//$response = $kernel->handle(
    //$request = Illuminate\Http\Request::capture()
//);

//$response->send();

//$kernel->terminate($request, $response);
?>
<!DOCTYPE html>
<!--pravimo prvi korak u angularu definisemo controler i vidimo kako se koristi-->
<html ng-app="ExploreSerbia">
	<head>
		<title>Explore Serbia</title>
		<!--ukljucujemo angularjs biblioteku-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular-route.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--ukljucujemo ,,controller" zapocetnu stranicu -->
		<script type="text/javascript" src="exploreserbia.js"></script>

		<script type="text/javascript" src="controller/offersController.js"></script>
		<script type="text/javascript" src="controller/indexController.js"></script>
		<script type="text/javascript" src="controller/deleteCommentController.js"></script>
		<script type="text/javascript" src="controller/addCommentController.js"></script>
		<script type="text/javascript" src="controller/quickSearchController.js"></script>
		<script type="text/javascript" src="model/commentModel.js"></script>
		<script type="text/javascript" src="model/offerModel.js"></script>
		<script type="text/javascript" src="model/indexModel.js"></script>
		<script type="text/javascript" src="model/quickSearchModel.js"></script>
		<link rel="stylesheet" href="views/style.css">

	</head>
	<body>
		<nav class="navbar navbar-default" id = "nav-placeholde" role = "navigation">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style = "color:white" href="#">EXPLORESERBIA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" ><span navcolor = "color">Home</span></a></li>
                    <li><a href="#" ><span navcolor = "color">Offers</span></a></li>
                    <li><a href="#" ><span navcolor = "color">Contact</span></a></li>
                    <li><a href="#" ><span navcolor = "color">About</span></a></li>
                    <li><a href="#" ><span navcolor = "color">Sign In</span></a></li>
                    <li><a href="#" style="color:orange">Sign Up</a></li>
                </ul>
            </div>
        </div>
</nav>


		<!--ovde ce se dodavati viewovi tokom rada aplikacije zavisno od rute na kojoj se nalazimo ng-view prikazuje odgovarajuci view i sve se to dinamicki menja-->
		<div ng-view>

			<img src="../pictures/belgrade.jpg">

		</div>




<footer>
	<div class="container-fluid" >
		<div class="row text-center">
			<div class="col-md-1"></div>
			<div class="col-md-3"  fdiv = "naslovkt">

				<table tfont = "font" align="center">
			  		<tbody>
			  		<tr>
			  		<td name = "kt">SERVICES</td>
			  		</tr>

			  		<tr>
			  		<td>Search</td>
					</tr>

			  		<tr>
			  		<td>Reservations</td>
					</tr>

			  		<tr>
			  		<td>Review</td>
					</tr>

					<tr>
			  		<td>Rate</td>
					</tr>

				</tbody></table>

			</div>
			<div class="col-md-4" fdiv = "naslovkt">
				<table tfont = "font" align="center">
			  		<tbody>
			  		<tr>
			  			<td name = "kt" colspan="2">CONTACT</td>
			  		</tr>
			  		<tr><td>Address:</td>
					<td>Kumanovska 14, Vračar</td>
					</tr><tr><td>Phone:</td>
					<td>011/3086 979,</td>
					</tr><tr><td>
					</td><td>011/3449 322</td>
					</tr><tr><td>Fax:</td>
					<td>011/3830 972</td>
					</tr><tr><td>E-mail:</td>
					<td><a href="mailto:eserbia@gmail.com">eserbia@gmail.com</a></td>
					</tr><tr><td></td>
					</tr></tbody>
				</table>
			</div>
			<div class="col-md-3" fdiv = "naslovkt">

				<table tfont = "font" align="center" style = "margin-bottom: 8px">
			  		<tbody>

			  		<tr>
			  		<td name = "kt">INFO</td>
			  		</tr>

			  		<tr>
			  		<td>Follow us</td>
					</tr>

				</tbody></table>


			  			<a href="http://www.googleplus.com">
			  				<img ng-src="https://s25.postimg.org/ms3vidi3j/googleplus.png" width="25" height="25">
			  			</a>

			  			<a href="http://www.facebook.com">
			  				<img ng-src="https://s25.postimg.org/4o0uxqkez/facebook.png" width="25" height="25">
			  			</a>

			  			<a href="http://www.instagram.com">
			  				<img ng-src="https://s25.postimg.org/53c4qr6cf/linkedin.png" width="25" height="25">
			  			</a>


			  			<a href="http://www.twitter.com">
			  				<img ng-src="https://s25.postimg.org/b5jrh8usf/twitter.png" width="25" height="25">
			  			</a>

			  			<a href="http://www.youtube.com">
			  				<img ng-src="https://s25.postimg.org/t9ms1vsgv/youtube.png" width="25" height="25">
			  			</a>

			</div>

			<div class="col-md-1"></div>
		</div>
	</div>
</footer>
