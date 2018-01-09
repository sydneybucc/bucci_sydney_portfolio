(function() {
	"use strict";
	console.log("SEAF Fired");
	
	var nav = document.querySelector("#mainNav");
	var links = nav.querySelectorAll("a");
	console.log(links);
	
	function scrollit(evt) { //use evt when you need to grab the id or something stored in it
		//console.log("From scrollit");
		//console.log(evt.currentTarget.id);
		var idNum = evt.currentTarget.id;
		TweenLite.to(window, 1, {scrollTo:{y:"#section"+idNum, offsetY:20}});
	}
	
	for(var i=0; i<links.length; i++) {
		links[i].addEventListener("click", scrollit, false);
	}
	
})();