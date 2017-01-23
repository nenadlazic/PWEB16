var homeConfig = function($routeProvider){
	$routeProvider
	.when('/',{
		controller: 'indexController',
		templateUrl: 'views/index.html'
	})
	.when('/about',{
		controller: 'aboutController',
		templateUrl: 'views/about.html'
	})
	.when('/contact',{
		controller: 'contactController',
		templateUrl: 'views/contact.html'
	})
	.when('/login',{
		controller: 'loginController',
		templateUrl: 'views/login.html'
	})
	.when('/terms',{
		controller: 'termsController',
		templateUrl: 'views/terms.html'
	})
	.when('/signup',{
		controller: 'signupController',
		templateUrl: 'views/signup.html'
	})
	.when('/offers',{
		controller: 'offfersController',
		templateUrl: 'views/offfers.html'
	})
	.when('/addComment/:offerId',{
		controller:'addCommentController',
		templateUrl: 'views/addComment.html'
	})
	.when('/deleteComment/:offerId/:commentId',{
		controller: 'deleteCommentController',
		templateUrl: 'views/offers.html'
	})
	.when('/kind=:kindID&location=:locationID',{
		controller: 'quickSearchController',
		templateUrl: 'views/quickSearch.html'
	})
	.when('/profile',{
		controller: 'indexController',
		templateUrl: 'views/index.html'
	})
	.when('/sendsuccessfuly',{
		controller: 'sendsuccessfulyController',
		templateUrl: 'views/sendsuccessfuly.html'
	})
	.when('/userprofile',{
		controller: 'profileController',
		templateUrl: 'views/profile.html'
	})
	.when('/addOffer',{
		controller: 'addOfferController',
		templateUrl: 'views/addOffer.html'
	})
.when('/editProfile',{
		controller: 'editProfileController',
		templateUrl: 'views/editProfile.html'
	})
.when('/reservations',{
		controller: 'reservationsController',
		templateUrl: 'views/reservations.html'
	})
}
<!--ovo exploreserbia mora biti isto kao u exploreserbia.html ng-app sto smo zadali-->
var ExploreSerbia = angular.module('ExploreSerbia',['ngRoute']).config(homeConfig);


<!--ovaj deo koda nam pomaze da zavisno od rute(URL koji je naveden) da nasa aplikacija zna-->
<!--koji view se prikazuje i koji controller je zaduzen za taj view. Controller sluzi da manipulise podacima-->
<!--vrsi obrade kada se sta prikazuje dok model sluzi da cuva podatke, model preko php i laravela komunicira sa-->
<!--bazom i dobavlja nam podatke-->
