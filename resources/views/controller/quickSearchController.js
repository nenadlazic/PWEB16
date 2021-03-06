ExploreSerbia.controller('quickSearchController',
	function($scope,$location,$routeParams, quickSearchModel)
	{

		var offers = quickSearchModel.getOffers();

		var inputKind = $routeParams.kindID;
		var inputLocation = $routeParams.locationID;
			
			console.log(inputKind + inputLocation);
			//funkcija koja proverava da li postoji poklapanja unetog stringa sa imenom u ponudama
			//slucaj pretrage ukoliko se cilja na konkretnu ponudu npr. metropola
			function exists(title, input)
			{
				for(var i = 0; i < title.length; i++)
				{
					for(var j = 0; j < input.length; j++)
					{
						if(new String(title[i]).valueOf() == new String(input[j]).valueOf())
							return true;
					}
				}

				return false;
			}
/*			
			if(inputKind.length < 3)
			{
				window.alert("Check your input. Minimum number words is three and minimum length of the word is three.")
				return;
			}
*/
			//ako je korisnik uneo u pretragu samo 'hotel' prikazujemo sve hotele iz ponude
			var inputKindID;
			switch(inputKind)
			{
				case 'hotel': inputKindID = 1;
				break;
				case 'shopping': inputKindID = 2;
				break;
				case 'coffe': inputKindID = 3;
				break;
				case 'food': inputKindID = 4;
				break; 
				case 'nightlife': inputKindID = 5;
				break;
				default:
					inputKindID = inputKind;
					break;
			}
			
			console.log(inputKindID);
			var tmpOffres = [];

			if(inputKindID != inputKind)
			{
				//pretraga u slucaju odredjene kategorija
				for(var i = 0; i < offers.length; i++)
				{
					if(offers[i].kategorijaID == inputKindID && offers[i].location.toLowerCase() == inputLocation )
							tmpOffres.push(offers[i]);
				}
			}
			else
			{

				var splitinputKind = inputKind.split(" ");

				//pretraga po naslovu za odredjenu ponudu
				for(var i = 0; i < offers.length; i++)
				{

					var splitTitleName = offers[i].title.toLowerCase().split(" ");
					
					if(exists(splitTitleName, splitinputKind) && offers[i].location.toLowerCase() == inputLocation )
						tmpOffres.push(offers[i]);

				}
			}

			//na scope lepimo gde ima poklapanja u pretrazi
			$scope.offers = tmpOffres;

	});