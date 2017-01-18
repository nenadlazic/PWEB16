ExploreSerbia.controller('indexController',
	function($scope,$location,$routeParams, indexModel)
	{
		$scope.quicksearch = function($id)
		{
			console.log($id);
			if($id == "btnQuick")
			{
				var inputText = $scope.ngsearch.toLowerCase().trim();
				var inputLocation = $scope.nglocation.toLowerCase().trim();
			}

			else if($id == "btnHotel")
			{
			console.log($id);
				var inputText = new String("hotel");
				var inputLocation = $scope.nglocation.toLowerCase().trim();
			}
			else if($id == "btnShopping")
			{
			console.log($id);
				var inputText = new String("shopping");
				var inputLocation = $scope.nglocation.toLowerCase().trim();
			}
			else if($id == "btnFood")
			{
			console.log($id);
				var inputText = new String("food");
				var inputLocation = $scope.nglocation.toLowerCase().trim();
			}
			else if($id == "btnDrink")
			{
			console.log($id);
				var inputText = new String("drink");
				var inputLocation = $scope.nglocation.toLowerCase().trim();
			}
			else if($id == "btnNightlife")
			{
			console.log($id);
				var inputText = new String("nightlife");
				var inputLocation = $scope.nglocation.toLowerCase().trim();
			}

			$location.path('/kind='+inputText+'&location='+inputLocation);
		}


	});