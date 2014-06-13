var index = 0;

	var repeatImage = setInterval(function(){

		if(index > 3){

			index = 0;
		}
		
		var image = document.getElementsByClassName("picture")[0].children;
		console.log("mog");
		for(var i = 0; i < image.length; i++){

			image[i].style.opacity = 0;
		}

		switch(index){

			case 0:

				image[index].style.opacity = 1;

			break;

			case 1:

				image[index].style.opacity = 1;

			break;

			case 2:

				image[index].style.opacity = 1;

			break;

			case 3:

				image[index].style.opacity = 1;
				

			break;


		}

		index++;

	}, 10000);