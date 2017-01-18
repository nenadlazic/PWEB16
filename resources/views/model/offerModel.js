<!--ovde nam je zapocetak potrebna funkcija getOffers koja ce nam na neki nacin simulirati bazu kojanam vraca podatke koji su nam potrebni-->

ExploreSerbia.service('offerModel',function(){
	this.getOffers = function(){
		return [
			{
				id:0,
				title:'Zira restaurant',
				summary: 'This is one of the finest restaurants in Belgrade with a wide selection and friendly staff'
			},
			{
				id:1,
				title:'Chez Nik restaurant',
				summary: 'This is one of the finest restaurants in Belgrade with a wide selection and friendly staff'
			},
			{
				id:2,
				title:'Moskva restaurant',
				summary: 'This is one of the finest restaurants in Belgrade with a wide selection and friendly staff'
			},
			{
				id:3,
				title:'Hayat restaurant',
				summary: 'This is one of the finest restaurants in Belgrade with a wide selection and friendly staff'
			},
			{
				id:4,
				title:'Metropol restaurant',
				summary: 'This is one of the finest restaurants in Belgrade with a wide selection and friendly staff'
			},
			{
				id:5,
				title:'Sumadija restaurant',
				summary: 'This is one of the finest restaurants in Belgrade with a wide selection and friendly staff'
			},
			{
				id:6,
				title:'Zlatibor restaurant',
				summary: 'This is one of the finest restaurants in Belgrade with a wide selection and friendly staff'
			}
		]
	}

});