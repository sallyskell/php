function search(){		

		var header = document.getElementsByTagName("header")[0];
		var content = document.getElementsByClassName("content")[0];
		
		if(this.classList.contains("active")){

			this.classList.remove("active");
			header.classList.remove("show");
			content.classList.remove("down");


		}

		else{

			this.classList.add("active");
			header.classList.add("show");
			content.classList.add("down");
		}
	};	

	document.getElementsByClassName("loupe")[0].addEventListener("click",search,false);
