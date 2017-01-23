ExploreSerbia.controller('offfersController',
	function($scope,$http,$location,$routeParams,$timeout)
	{

		$timeout(function() { $scope.$apply(function() { console.log("radiii"); $location.path("/"); }); }, 2000);


	});