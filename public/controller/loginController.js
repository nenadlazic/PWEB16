ExploreSerbia.controller('loginController',
	function($scope,$location,$routeParams)
	{

		$scope.login = function()
		{
			
			var email = $scope.email;
			var password = $scope.password;
			var remember = $scope.rememberMe;

			if(!( remember == true))
				remember = false;
		
		}
	});