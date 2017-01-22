ExploreSerbia.controller('indexController',
    function($scope, $rootScope, $location, $routeParams, indexModel, $http) {
        $scope.quicksearch = function($id) {
            var inputText;
            var inputLocation;

            if ($id == "btnQuick") {
                inputText = $scope.ngsearch.toLowerCase().trim();
                inputLocation = $scope.nglocation.toLowerCase().trim();
            } else if ($id == "btnHotel") {
                inputText = "hotel";
                inputLocation = $scope.nglocation.toLowerCase().trim();
            } else if ($id == "btnShopping") {
                inputText = "shopping";
                inputLocation = $scope.nglocation.toLowerCase().trim();
            } else if ($id == "btnFood") {
                inputText = "food";
                inputLocation = $scope.nglocation.toLowerCase().trim();
            } else if ($id == "btnDrink") {
                inputText = "drink";
                inputLocation = $scope.nglocation.toLowerCase().trim();
            } else if ($id == "btnNightlife") {
                inputText = "nightlife";
                inputLocation = $scope.nglocation.toLowerCase().trim();
            }

            $rootScope.inputText = inputText;
            $rootScope.inputLocation = inputLocation;

            $location.path('/kind=' + inputText + '&location=' + inputLocation);
        }

    });