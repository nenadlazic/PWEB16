ExploreSerbia.controller('signupController',
	function($scope,$location,$routeParams)
	{

		$scope.registration = function()
		{
			console.log("radiii");

			var name = $scope.regName;
			console.log(name);

			var email = $scope.regEmail.toLowerCase();
			console.log(email);

			var pass = $scope.regPassword;
			console.log(pass);

			var birthDate = $scope.regBirthDate;
			console.log(birthDate);

			var country = $scope.regSelectCountry;
			console.log(country);	
			
			var female = $scope.regGen;
			console.log(female);	

			var profileType = $scope.regProfileType;
			console.log(profileType);	

			var terms = $scope.regTerms;
			if(terms != true){
				alert("You be must accept the terms of use in order to register");
			}					

		}
	});