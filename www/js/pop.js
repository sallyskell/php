function popup(){

	var popup = document.getElementsByClassName("pop")[0];


	if(this.classList.contains("active")){

		popup.style.opacity = 0;
		popup.classList.remove("up");
		setTimeout(function(){

			popup.style.display = "none";

		},400);
		// popup.classList.remove("up");
		this.classList.remove("active");
	}

	else{

		// popup.classList.add("up");
		popup.style.display = "block";
		setTimeout(function(){

			popup.style.opacity = "1";
			popup.classList.add("up");

		},100);
		this.classList.add("active");
	}

};

	document.getElementsByClassName("encore")[0].children[0].addEventListener("click",pop,false);