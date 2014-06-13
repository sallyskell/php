
	
function detectHeight(ele){

	var menuFixed = document.getElementsByClassName("futurnav")[0].children[0];
	var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop || window.pageYOffset;
	

	if(scrollPosition < ele){

		menuFixed.classList.remove("fixed");
	}

	if(scrollPosition >= ele){

		menuFixed.classList.add("fixed");
	}
};



function checkHeader(){

	var header = document.getElementsByTagName("header")[0];
	var posMax;

	if(header.classList.contains("show")){

		posMax = 240;
		detectHeight(posMax);

	}

	else{

		posMax = 120;
		detectHeight(posMax);

	}

};

function checkWidth(){

	var screenwidth = window.innerWidth;

	if(screenwidth > 1024){
		document.getElementsByClassName("futurnav")[0].children[0].style.height = window.innerHeight + "px";
		checkHeader();
	}

	else{

		document.getElementsByClassName("futurnav")[0].children[0].style.height = document.getElementsByClassName("content")[0].offsetHeight + "px";
	}

};

document.addEventListener("scroll",checkWidth,false);
window.addEventListener("load",checkWidth,false);