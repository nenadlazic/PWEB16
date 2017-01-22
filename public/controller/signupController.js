ExploreSerbia.controller('signupController',
	function($scope,$http,$location,$routeParams)
	{

		 $scope.readURL = function () {

  			for(var i=0; i<2; i++){
  				
			 	var inputss = document.getElementById("imgInp");


			        if (inputss.files && inputss.files[0]) {

			            var reader = new FileReader();
			            
			            reader.onload = function (e) {	
			            	$scope.showImage = e.target.result;
			            } 
			            reader.readAsDataURL(inputss.files[0]);
			        }
			    }
		    }
		    

		$scope.registration = function()
		{
			console.log("radiii");



			var image = $scope.regImage;
			console.log(image);

			var name = $scope.regFirstName;
			console.log(name);
			if ($scope.regFirstName == "" || $scope.regFirstName == null) {
            	error = 1;
        	}
			var lastName = $scope.regLastName;
			console.log(lastName);
			if ($scope.regLastName == "" || $scope.regLastName == null) {
            	error = 1;
        	}
			$scope.message = "";
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var error = 0;
			if ($scope.regEmail == "" || $scope.regEmail == null) {
            	error = 1;
        	}
			console.log(email);
			if (!emailReg.test($scope.regEmail)) {
           		error = 2;
	        }
	        /*---- Email is validated ------ */

			var pass = $scope.regPassword;
			console.log(pass);

			if ($scope.regPassword == "" || $scope.regPassword == null) {
            	error = 3;
	        }

	        var phone = $scope.regPhone;
			console.log(phone);
			if ($scope.regPhone == "" || $scope.regPhone == null) {
            	error = 1;
        	}

			var birthDate = $scope.regBirthDate;
			console.log(birthDate);
			if ($scope.regBirthDate == "" || $scope.regBirthDate == null) {
            	error = 1;
        	}

			var country = $scope.regSelectCountry;
			console.log(country);	
			if ($scope.regSelectCountry == "" || $scope.regSelectCountry == null) {
            	error = 1;
        	}
			
			var female = $scope.regGen;
			console.log(female);	
			if ($scope.regGen == "" || $scope.regGen == null) {
            	error = 1;
        	}
			var profileType = $scope.regProfileType;
			console.log(profileType);	
			if ($scope.regProfileType == "" || $scope.regProfileType == null) {
            	error = 1;
        	}

			var terms = $scope.regTerms;
			if(terms != true){
				alert("You be must accept the terms of use in order to register");
			}

			if (error == 0) {
	            var request = $http({
                method: "post",
                url:  "/php/signup.php",
                data: {
                	first_name: $scope.regFirstName,
                	last_name: $scope.regLastName,
                    email: $scope.regEmail,
                    pass: $scope.regPassword,
                    phone: $scope.regPhone
                },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            /* Check whether the HTTP Request is Successfull or not. */
            request.success(function (data) {
                $scope.message = "From PHP file : "+data;
				$location.path('/');

            });
        }
        else {
            $scope.message = "You have Filled Wrong Details! Error: " + error;
        }

		}
	});