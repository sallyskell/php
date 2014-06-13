var words = new Array();
words = ["prix","snacks","stands","navettes","salles","logements","services","bières", "durées", "tickets", "bars", "trajets", "point d'eau"]
console.log(words.length);
function random(){
	
	var change = document.getElementById("randomWord");
	var index = 1;
	
	setInterval(function(){


		if(index >= words.length){

			index = 0;
		}

		change.style.opacity = 0;
		setTimeout(function(){

			change.innerHTML = words[index];
			index++;
			change.style.opacity = 1;
			
		},300);
			
	}, 3000);

};

random();