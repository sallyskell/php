var svg = document.getElementById("svg");
var categories = svg.children;
var legend = document.getElementsByClassName("liste");

for(var i = 0; i < legend.length; i++){

	legend[i].addEventListener("mouseover",hoverListe,false);
	legend[i].addEventListener("mouseout",out,false);
};

for(var i = 0; i < categories.length; i++){

	categories[i].addEventListener("mouseover",hoverSvg,false);
	categories[i].addEventListener("mouseout",out,false);
};

function getChildren(ele){

	var cat = document.getElementById(ele).children;

	for(var i = 0; i < cat.length;i++){

		cat[i].setAttribute("fill","#3fc380");
	}
};

function showPart(ele){

	switch(ele){

		case "one":

			getChildren("cat1");
			legend[0].classList.add("greenhover");

			break;

		case "two":

			getChildren("cat2");
			legend[1].classList.add("greenhover");

			break;

		case "three":

			getChildren("cat3");
			legend[2].classList.add("greenhover");
			legend[4].classList.add("greenhover");


			break;

		case "four":

			getChildren("cat4");
			legend[3].classList.add("greenhover");
			legend[5].classList.add("greenhover");

			break;

	}
};

function hoverListe(){

	for(var i = 0; i < categories.length; i++){
		var places = categories[i].children;
		for(var b = 0; b < places.length; b++ ){
			places[b].setAttribute("fill","#fff");
		}
	}

	for(var i = 0; i < legend.length; i++){

		legend[i].classList.add("hoversvg");
		legend[i].classList.remove("greenhover");
	}

	var pos = this.classList[1];

	showPart(pos);
};

function hoverSvg(){

	for(var i = 0; i < categories.length; i++){
		var places = categories[i].children;
		for(var b = 0; b < places.length; b++ ){
			places[b].setAttribute("fill","#fff");
		}
	}

	for(var i = 0; i < legend.length; i++){

		legend[i].classList.add("hoversvg");
		legend[i].classList.remove("greenhover");
	}

	var cat = this.classList[0];

	showPart(cat);
};

function out(){

	for(var i = 0; i < categories.length; i++){
		var places = categories[i].children;
		for(var b = 0; b < places.length; b++ ){
			places[b].setAttribute("fill","#fff");
		}
	}

	for(var i = 0; i < legend.length; i++){

		legend[i].classList.remove("hoversvg");
		legend[i].classList.remove("greenhover");
	}
}