ExploreSerbia.controller('quickSearchController',
    function($scope, $rootScope, $location, $routeParams, $http, quickSearchModel) {

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



            $scope.offers = result_resolved.data.offers;
        }, function(result_rejected) {

            console.log(result_rejected);
        });



    });