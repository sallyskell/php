function square(){
		var square = document.getElementsByClassName("square");
		var squareParent = document.getElementsByClassName("squareParent");

		for(var i = 0; i < square.length; i++){

			var squareWidth = square[i].offsetWidth;
			square[i].style.height = squareWidth + "px";
		}

	};

	window.addEventListener("load",square,false);
	
		window.addEventListener("resize",square,false);