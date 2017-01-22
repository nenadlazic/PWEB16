ExploreSerbia.controller('loginController',
    function($scope, $location, $routeParams, $http, $rootScope) {
        $rootScope.loggedIn = false;
        $rootScope.loggedOut = true;
        $scope.logout = function() {
            $rootScope.loggedIn = false;
            $rootScope.loggedOut = true;
        }

        function login() {
            $rootScope.loggedIn = true;
            $rootScope.loggedOut = false;
        }
        $scope.login = function() {
            var email = $scope.email;
            var password = $scope.password;
            var remember = $scope.rememberMe;
            if (!(remember == true))
                remember = false;
            var request = $http({
                method: "post",
                url: "/php/login.php",
                data: {
                    email: $scope.email,
                    password: $scope.password,
                    remember_me: remember
                },
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then(function(result_resolved) {
                if (result_resolved.data.loggedin == true) {
                    login();
                    $location.path("/profile");
                } else {
                    alert("Email or password incorrect");
                }
            }, function(result_rejected) {
                console.log(result_rejected);
            });
        }
    });