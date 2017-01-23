ExploreSerbia.controller('editProfileController',
    function($scope, $rootScope, $location, $http, $routeParams) {

            var uType;
            if ($rootScope.userType == "individual")
                uType = "individual";
            else
                uType = "menager";
            
            var request = $http({
                method: "post",
                url: "/php/getInfo.php",
                data: {
                    id: $rootScope.currentUserId,
                    type: uType
                 },
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(function(result_resolved) {
            
                 $scope.frstName = result_resolved.data.first_name;
                 $scope.lastName = result_resolved.data.last_name;
                 $scope.email = result_resolved.data.email;
                 $scope.phoneNumber = result_resolved.data.phone;
                 
                 console.log(result_resolved);
                 
            }, function(result_rejected) {
            
                console.log(result_rejected);
                
            });

            
            
            
        $scope.updateProfile = function() {
            var uType;
            if ($rootScope.userType == "individual")
                uType = "individual";
            else
                uType = "menager";

		if($scope.password != $scope.confirmPassword)
		{
			alert("Passwords do not match! Try again.");
			return;
		}
                console.log(uType);
            var request = $http({
                method: "post",
                url: "/php/changeProfil.php",
                data: {
                    id: $rootScope.currentUserId,
                    type: uType,
                    firstName: $scope.frstName,
                    lastName: $scope.lastName,
                    email: $scope.email,
                    phoneNumber: $scope.phoneNumber,
                    password: $scope.password
                 },
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(function(result_resolved) {
                 
                 alert("Success!");
                 $location.path("/userprofile");
                 
                 
            }, function(result_rejected) {
                console.log(result_rejected);
            });


        }
        
        $scope.cancel = function() {
        console.log("rara");
        	$location.path("/");
        }



    }
);