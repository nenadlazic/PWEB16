ExploreSerbia.controller('sendsuccessfulyController',
	function($scope,$http,$location,$routeParams,$timeout)
	{
		console.log("send successfuly ");

		$timeout(function() { $scope.$apply(function() { $location.path("/"); }); }, 2000);


	});