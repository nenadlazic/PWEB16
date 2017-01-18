ExploreSerbia.service('quickSearchModel',function(){
	this.getOffers = function(){
		return [
			{
				kategorijaID:1,
				ID:1,
				kind: 'hotel',
				title:'Metropola',
				stars: '4',
				location: 'Novi Sad'
			},
			{
				kategorijaID:1,
				ID:2,
				kind: 'hotel',
				title:'Hayat',
				stars: '3',
				location: 'Beograd'
			},
			{
				kategorijaID:2,
				ID:1,
				kind: 'shopping',
				title:'Usce',
				location: 'Beograd'

			},
			{
				kategorijaID:2,
				ID:2,
				kind: 'shopping',
				title:'Delta',
				location: 'Beograd'
			},
			
		]
	}

});