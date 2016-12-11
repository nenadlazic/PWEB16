ExploreSerbia.service('commentModel',function(){
	this.getCommentsForOffers = function(offerId){
		var offer = JSON.parse(window.localStorage.getItem(offerId));
		if(!offer){
			return [];
		}
		return offer.comments;
	}

	this.addComment = function(offerId, commentContent){
		var now = new Date();
		var comment = {
			content: commentContent,
			id:now
		};

		var offer = JSON.parse(window.localStorage.getItem(offerId));
		if(!offer){
			offer = {
				id:offerId,
				comments:[]
			}
		}
		offer.comments.push(comment);
		window.localStorage.setItem(offerId, JSON.stringify(offer));
	}

	this.deleteComment = function(offerId, commentId){
		var offer = JSON.parse(window.localStorage.getItem(offerId));
		if(!offer || !offer.comments){
			return;
		}

		for(var i=0; i<offer.comments.length;i++){
			if(offer.comments[i].id === commentId){
				<!--ovo splice samo cut-uje iz niza komentara komentar sa datim commentId-om-->
				<!--i je pozicija u nizu a drugi argument koliko comment-a od te pozicije uklanjamo-->
				offer.comments.splice(i,1);
				window.localStorage.setItem(offerId, JSON.stringify(offer));
				return;
			}
		}

	}
});