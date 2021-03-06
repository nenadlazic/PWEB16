<?php include_once("php/connect_to_mysql.php"); 

	/*if(!isset($_SESSION['email']))
		header('Location: exploreserbia.php');
	*/
?>
<!DOCTYPE html>
<!--pravimo prvi korak u angularu definisemo controler i vidimo kako se koristi-->
<html ng-app="ExploreSerbia">
	<head>
		<title>Explore Serbia</title>
		<!--ukljucujemo angularjs biblioteku-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular-route.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--ukljucujemo ,,controller" zapocetnu stranicu -->
		<script type="text/javascript" src="exploreserbia.js"></script>

		<script type="text/javascript" src="controller/loginController.js"></script>
		<script type="text/javascript" src="controller/offersController.js"></script>
		<script type="text/javascript" src="controller/offfersController.js"></script>
		<script type="text/javascript" src="controller/indexController.js"></script>
		<script type="text/javascript" src="controller/deleteCommentController.js"></script>
		<script type="text/javascript" src="controller/addCommentController.js"></script>
		<script type="text/javascript" src="controller/quickSearchController.js"></script>
		<script type="text/javascript" src="controller/signupController.js"></script>
		<script type="text/javascript" src="controller/termsController.js"></script>
		<script type="text/javascript" src="controller/profileController.js"></script>
		<script type="text/javascript" src="controller/editProfileController.js"></script>
		<script type="text/javascript" src="controller/reservationsController.js"></script>
		<script type="text/javascript" src="controller/contactController.js"></script>
		<script type="text/javascript" src="controller/sendsuccessfulyController.js"></script>
		<script type="text/javascript" src="controller/addOfferController.js"></script>
		<script type="text/javascript" src="model/commentModel.js"></script>
		<script type="text/javascript" src="model/offerModel.js"></script>
		<script type="text/javascript" src="model/indexModel.js"></script>
		<script type="text/javascript" src="model/quickSearchModel.js"></script>
		<link rel="shortcut icon" type="image/x-icon" href="pictures/favicon.ico"/>
		<link rel="stylesheet" href="views/style.css">

	</head>
	<body class="Site">

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
                <a class="navbar-brand" style = "color:white" href="#/">
                	<img src = "https://s25.postimg.org/8v2skznq7/small_logo.png" width = "150" height = "40" style = "margin-top:-10px">
                </a>
            </div>
            
            <div  ng-controller = "loginController" ng-model = "loggedIn" ng-show="loggedIn" ng-include src="'views/headerlogin.html'"></div>
            <div  ng-controller = "loginController" ng-model = "loggedOut" ng-show="loggedOut" ng-include src="'views/headerlogout.html'"></div>
        </div>
		</nav>

		<!--ovde ce se dodavati viewovi tokom rada aplikacije zavisno od rute na kojoj se nalazimo ng-view prikazuje odgovarajuci view i sve se to dinamicki menja-->
		<div ng-view id="container" class="Site-content">

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
					  		<td>Offers</td>
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
							<td><a href="mailto:techsupport@rezervisi-rs.site">techsupport@rezervisi-rs.site</a></td>
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
	</body>
</html>