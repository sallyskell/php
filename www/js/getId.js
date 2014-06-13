var idartiste;
var artJson;

function getId(){
	
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "php/getId.php", true);
		xmlhttp.onreadystatechange = function () {
		  if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
		    idartiste = xmlhttp.responseText;
		    getJson();
		  }
		};
		xmlhttp.send(null);
}

function getJson(){

	var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "json/artistes.json", true);
		xmlhttp.onreadystatechange = function () {
		  if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
		   	artJson = JSON.parse(xmlhttp.responseText);
		   	replaceText();
		  }
		};
		xmlhttp.send(null);
};

getId();
