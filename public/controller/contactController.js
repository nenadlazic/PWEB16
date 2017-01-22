ExploreSerbia.controller('contactController',
	function($scope,$http,$location,$routeParams)
	{

		$scope.sendEmail = function()
		{
			console.log("radiii sendEmail");

			var error = 0;

			var name = $scope.contactName;
			console.log(name);
			if ($scope.contactName == "" || $scope.contactName == null) {
            	error = 1;
        	}
			var cEmail = $scope.contactEmail;
			console.log(cEmail);
			if ($scope.contactEmail == "" || $scope.contactEmail == null) {
            	error = 1;
        	}

			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if (!emailReg.test($scope.contactEmail)) {
           		error = 2;
	        }
	        /*---- Email is validated ------ */

			var msg = $scope.contactMessage;
			console.log(msg);
			if ($scope.contactMessage == "" || $scope.contactMessage == null) {
            	error = 1;
        	}



			if (error == 0) {
	            var request = $http({
                method: "post",
                url:  "../php/contactUs.php",
                data: {
                	name: $scope.contactName,
                	email: $scope.contactEmail,
                    msg: $scope.contactMessage
                },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).then(function(result_resolved) {
                if (result_resolved.data.sent == true) {
                    alert("Email or name correct");
                    $location.path('/');
                } else {
                    alert("Email or name incorrect format");
                }
            }, function(result_rejected) {
                console.log(result_rejected);
            });
        }
			
		}
	});