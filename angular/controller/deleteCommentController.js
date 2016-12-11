//na ovaj nacin nasoj web app koja se zove ExploreSerbia definisemo controllere koje koristi(koriscene controllere 
//mozete videti u exploreserbia.js fajlu gde su
//navedeni controlleri i view-i koji se koriste na odgovarajucim putanjama)

ExploreSerbia.controller('deleteCommentController',
	function($scope,$location,$routeParams, commentModel){
		var offerId = $routeParams.offerId;
		
		console.log("brisanje");
		commentModel.deleteComment(offerId, $routeParams.commentId);
		$location.path('/offer/'+offerId);
	}
);
