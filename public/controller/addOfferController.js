ExploreSerbia.controller('addOfferController',
	function($scope,$http,$location,$routeParams,$rootScope, $timeout)
	{

		$rootScope.addOfferSuccess = false;

		$scope.sendOffer = function()
		{
			console.log("radiii sendOffer");

			var error = 0;

			var name = $scope.addCName;
			console.log(name);
			if ($scope.addCName == "" || $scope.addCName == null) {
            	error = 1;
        	}

			var cEmail = $scope.addCEmail;
			console.log(cEmail);
			if ($scope.addCEmail == "" || $scope.addCEmail == null) {
            	error = 1;
        	}

			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if (!emailReg.test($scope.addCEmail)) {
           		error = 2;
	        }
	        /*---- Email is validated ------ */

			var city = $scope.addCCity;
			console.log(city);
			if ($scope.addCCity == "" || $scope.addCCity == null) {
            	error = 1;
        	}

        	var addtype = $scope.addCType;
			console.log(addtype);
			if ($scope.addCType == "" || $scope.addCType == null) {
            	error = 1;
        	}
        	
        	var adddesc = $scope.addCDescription;
			console.log(adddesc);
			if ($scope.addCDescription == "" || $scope.addCDescription == null) {
            	error = 1;
        	}
 
			if (error == 0) {
	            var request = $http({
                method: "post",
                url:  "/php/addOffer.php",
                data: {
                	id_manager: $rootScope.currentUserId,
                	location: $scope.addCCity,
                    type: $scope.addCType,
                    name: $scope.addCName,
                    description: $scope.addCDescription
                },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).then(function(result_resolved) {
                if (result_resolved.data.sent == true) {
                	$rootScope.addOfferSuccess = true;

                	$timeout(function() { $scope.$apply(function() { 
                		$rootScope.addOfferSuccess = true;
                		$location.path("/profile"); }); }, 2000);
                } else {
                    alert("Email or name incorrect format");
                }
            }, function(result_rejected) {
                console.log(result_rejected);
            });
     	}
			
		} 

	});