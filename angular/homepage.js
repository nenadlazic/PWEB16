var homeConfig = function($routeProvider){
	$routeProvider
	.when('/',{
		controller: 'nestoController',
		templateUrl: 'views/nesto.html'
	})
	.when('/offer/:offerId',{
		controller: 'offersController'
		templateUrl: 'views/offer.html'
	})
	.when('/addComment/:offerId',{
		controller:'addCommentController'
		templateUrl: 'views/addComment.html'
	})
}
<!--ovo explore serbia mora biti isto kao u homepage.html ng-app sto smo zadali-->
var HomePage = angular.module('ExploreSerbia',{}).config(homeConfig);