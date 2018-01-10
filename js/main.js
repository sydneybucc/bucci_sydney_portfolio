(function() {
	"use strict";
	console.log("SEAF Fired");
    
    ///////////////////////
    //Main Navagation Scroll

	var nav = document.querySelector("#mainNav");
	var links = nav.querySelectorAll("a");
	//console.log(links);
	
	function scrollit(evt) { //use evt when you need to grab the id or something stored in it
		//console.log("From scrollit");
        var idNum = evt.currentTarget.id;
        //console.log(evt.currentTarget.id);
		TweenLite.to(window, 1, {scrollTo:{y:"#section"+idNum, offsetY:20}});
	}
	
	for(var i=0; i<links.length; i++) {
		links[i].addEventListener("click", scrollit, false);
    }
    
    /////////
    //Type Animation

    var options = {
        strings: [
            "I am a Developer^1000",
            "I am a Designer^1000",
            "I am a Problem Solver^1000"
        ],
        
        startDelay: 1000,
        typeSpeed: 80,
        backSpeed: 150,
        loop: true,
        smartBackspace: true
    }

    var typed = new Typed(".TXTanimation", options);
    
    //////////
    //Lightbox

    var moreButtons = document.querySelectorAll('.more');

    function changeElements() {
        let contObj = dynamicConent[this.id];
    }

    function lightBoxOpen() {
        //console.log("From lightBoxOpen");
    }

    function openlightBox(evt) {
        //console.log("From openLightbox");
        //debugger;
        //window.scrollTo(0, 0);
        document.body.style.overflow = "hidden";

        let lightbox = document.querySelector('.lightbox');
        lightbox.style.display = 'block';

        let lightboxImg = lightbox.querySelector('img');
        let lightboxClose = lightbox.querySelector('.close-lightbox');
        let lightboxDesc = lightbox.querySelector('p');


        if (evt.target.id == "freshstart") {
        	lightboxImg.src = "images/freshstartnow_final.png";
        	lightboxDesc.innerHTML = "TEST";
        }else if (evt.target.id == "mallery") {
			lightboxImg.src = "images/mallerys_final.png";
        	lightboxDesc.innerHTML = "TEST";
		}

        lightboxClose.addEventListener('click', closeLightbox, false);
    }

    function closeLightbox() {
        document.body.style.overflow = "auto";

        let lightbox = document.querySelector('.lightbox');
        let lightboxImg = lightbox.querySelector('.img');
        let lightboxDesc = lightbox.querySelector('p');
        
        lightbox.style.display = "";
        lightboxImg.src = "";
        lightboxDesc.innerHTML = "";
    }

    moreButtons.forEach(function(element,index) {
        element.addEventListener('click', openlightBox, false);
    });
})();