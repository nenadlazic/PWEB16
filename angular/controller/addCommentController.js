<!--na ovaj nacin nasoj web app koja se zove ExploreSerbia definisemo controllere koje koristi(koriscene controllere mozete videti u exploreserbia.js fajlu gde su
 navedeni controlleri i view-i koji se koriste na odgovarajucim putanjama)-->

ExploreSerbia.controller('addCommentController',function($scope,$location,$routeParams, commentModel){
	var offerId = $routeParams.offerId;
	$scope.cancel() = function(){
		$location.path('/offer/'+offerId);
	}

	$scope.createComment = function(){
		commentModel.addComment(offerId, $scope.comment.content);
		$location.path('/offer'+offerId);
	}
});
