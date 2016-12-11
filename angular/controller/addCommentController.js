ExploreSerbia.controller('addCommentController',function($scope,$location,$routeParams, commentModel){
	var chapterId = $routeParams.offerId;
	$scope.cancel() = function(){
		$location.path('/offer/'+offerId);
	}

	$scope.createComment = function(){
		commentModel.addComment(offerId, $scope.comment.content);
		$location.path('/offer'+offerId);
	}
});
