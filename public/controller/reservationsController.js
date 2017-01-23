ExploreSerbia.controller('reservationsController',
    function($scope, $rootScope, $location, $routeParams, $http) {


console.log($rootScope.currentUserId);

var request = $http({
            method: "post",
            url: "/php/getReservations.php",
            data: {
                user_id: $rootScope.currentUserId
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

});