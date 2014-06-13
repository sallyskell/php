var svg = document.getElementById("svg");
var categories = svg.children;

for(var i = 0; i<svg.children.length;i++){

	svg.children[i].addEventListener("mouseover",hoverSvg,false);
	svg.children[i].addEventListener("onclick",hoverSvg,false);

};

function hoverSvg(){

	for(var i = 0; i < categories.length; i++){
		var places = categories[i].children;
		for(var b = 0; b < places.length; b++ ){
			places[b].setAttribute("fill","#fff");
		}
	}

	var thisPlaces = this.children;

	for(var x = 0; x < thisPlaces.length; x++){

		thisPlaces[x].setAttribute("fill","#3fc380");
	}

	var legend = document.getElementsByClassName("liste")[0].children;

	for(var i = 0; i < legend.length; i++){

		legend[i].classList.remove("active");
	}

	var cat = this.getAttribute("id");

	switch(cat) {

		 case "cat1":

		 	legend[0].classList.add("active");
		 break;

		 case "cat2":

		 	legend[1].classList.add("active");
		 break;

		 case "cat3":

		 	legend[2].classList.add("active");
		 break;

		 case "cat4":

		 	legend[3].classList.add("active");
		 break;

	}
};

function outSvg(){

	for(var i = 0; i < categories.length; i++){
		var places = categories[i].children;
		for(var b = 0; b < places.length; b++ ){
			places[b].setAttribute("fill","#fff");
		}
	}

	// categories[0].children[0].setAttribute("fill","#3fc380");
	var legend = document.getElementsByClassName("liste")[0].children;

	for(var i = 0; i < legend.length; i++){

		legend[i].classList.remove("active");
	}

	// legend[3].classList.add("active");


};


svg.addEventListener("mouseout",outSvg,false);