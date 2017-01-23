ExploreSerbia.controller('profileController',
	function($scope, $rootScope, $http, $location, $routeParams)
	{
		

		 var request = $http({
                method: "post",
                url: "/php/getProfil.php",
                data: {
                    email: $rootScope.loginUserEmail
                },
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(function(result_resolved) {
                

            	$scope.firstName = result_resolved.data.first_name;
		$scope.lastName = result_resolved.data.last_name;
		$scope.email = result_resolved.data.email;
		$scope.phoneNumber = result_resolved.data.phone;
		$scope.regDate = result_resolved.data.created_at;
		$scope.points = result_resolved.data.points;

		if(result_resolved.data.manager == true)
		{
			$scope.btnAddOfferDisabled = true;
			$scope.userType = "Menager";
			$rootScope.userType = "menager";
		}
		else
		{
			$scope.btnAddOfferDisabled = false;
			$scope.userType = "Individual";
			$rootScope.userType = "individual";
		}
		
		$rootScope.currentUserId = result_resolved.data.id;
		

		


            }, function(result_rejected) {
                console.log(result_rejected);
            });

	});