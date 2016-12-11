ExploreSerbia.controller('offersController',function($scope,$location,$routeParams, offerModel, commentModel))
{
	var offers = offerModel.getOffers();
	for(var i=0;i<offers.length; i++){
		offers[i].comments = commentModel.getCommentsForOffers(offers[i].id);

		<!--do ovog momenta je jasno sta se radi, uzimamo sve ponude iz modela i sve komentare za svaku ponudu. Sada cemo scope-u da dodelimo to kako bi iz view-a tamo gde smo pisali offer in offers mogli da citamo to -->
		$scope.offers = offers;
		$scope.selectedOfferId = $routeParams.chapterId;
		$scope.deleteComment = function(commentId){
			var confirmDelete = confirm("Are you sure?");
			if(confirmDelete){
				$location.path('/deleteComment/'+$routeParams.offerId+'/'+commentId);
			}
		}

	}
};