<!--ovaj deo koda nam pomaze da zavisno od rute(URL koji je naveden) da nasa aplikacija zna-->
<!--koji view se prikazuje i koji controller je zaduzen za taj view. Controller sluzi da manipulise podacima-->
<!--vrsi obrade kada se sta prikazuje dok model sluzi da cuva podatke, model preko php i laravela komunicira sa-->
<!--bazom i dobavlja nam podatke-->
var homeConfig = function($routeProvider){
	$routeProvider
	.when('/',{
		controller: 'offersController',
		templateUrl: 'views/offers.html'
	})
	.when('/offer/:offerId',{
		controller: 'offersController',
		templateUrl: 'views/offers.html'
	})
	.when('/addComment/:offerId',{
		controller:'addCommentController',
		templateUrl: 'views/addComment.html'
	})
	.when('/deleteComment/:offerId/:commentId',{
		controller: 'deleteCommentController',
		templateUrl: 'views/offers.html'
	})
}
<!--ovo exploreserbia mora biti isto kao u exploreserbia.html ng-app sto smo zadali-->
var ExploreSerbia = angular.module('ExploreSerbia',['ngRoute']).config(homeConfig);