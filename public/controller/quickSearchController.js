ExploreSerbia.controller('quickSearchController',
    function($scope, $rootScope, $location, $routeParams, $http,$timeout, quickSearchModel) {

        var request = $http({
            method: "post",
            url: "/php/getOffers.php",
            data: {
                looking_for: $rootScope.inputText,
                city_name: $rootScope.inputLocation
            },
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).then(function(result_resolved) {

console.log(result_resolved.data);

            $scope.offers = result_resolved.data.offers;
        }, function(result_rejected) {

            console.log(result_rejected);
        });


            $scope.init = function(id_arg){
            	//var id = id_arg.id;
            	console.log(id_arg);
                console.log($rootScope.currentUserId);

            if ($rootScope.loggedIn == false) {
                // do something
                 alert("You must be logged in to reserve!");
             } else {
                console.log($rootScope.currentUserId);
                var request = $http({
                method: "post",
                url:  "/php/processReservation.php",
                data: {
                	offer_id: id_arg,
                	user_id: $rootScope.currentUserId
                },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).then(function(result_resolved) {
                console.log(result_resolved);
                if (result_resolved.data.reserved == true) {
                
                        alert("Success!");
 
                	$timeout(function() { $scope.$apply(function() { 
                		$location.path("/profile"); }); }, 2000);
                } else {
                    
                }
            }, function(result_rejected) {
                console.log(result_rejected);

            
            });
}
            }


    });