(function(){

	let wh = window.innerHeight / 2,
	ww = window.innerWidth / 2,
	// img = document.getElementsByTagName("img")[0];
	img = document.querySelector(".single-mueble .entry-content img");

	function sway(xPos, yPos) {
		img.style.transform = "translateX("+(yPos - wh) / 50+"px) translateY("+(xPos - ww) / 50 +"px)";
	}

	document.addEventListener("mousemove", function(e) {
	  sway(e.clientX,e.clientY);
	});

	document.addEventListener("touchmove", function(e) {
	    e.preventDefault();
	    var touch = e.targetTouches[0];
	    if (touch) {
	        sway(touch.pageX, touch.pageY);
	    }
	});


})();
