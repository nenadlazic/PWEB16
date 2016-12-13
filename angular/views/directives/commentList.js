//angular ovo gbNoteList prepoznaje kao gb_note_list a ovo se poziva u offers.html u okviru naredbe
//<gb-note-list ng-show='offer.id == selectedOfferId' /> i sluzi da ispise sve vezano za komentare
//ovo je potrebno dodati u exploreserbia.html kao include script
ExploreSerbia.directive("gbCommentList", function(){
	console.log('gbCommentList called');
	return {
		restrict: 'AE',
		replace: true,
		template: '<p style="background-color:{{color}}">Hello World',
		templateURL: 'views/directives/commentList.html',
		scope:{
			show: '=show',
			comments:'=comments',
			orderValue: '@orderBy',
			onDelete: '=deleteCommentHandler'
		},
	};
});