<?php 
	session_start();
	include 'php/verifSearch.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title>I wanna know</title>

	<link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/font.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css">
	<link rel="icon" type="image/png" href="img/favicon.png"> 

</head>
<body>

	<div class="grille"></div>
	
	<div class="container accueil">
		
		<section class="baseline" id="baseline">

			<ul>
				
				<li class="logo"><a href="index.php">I wanna know</a></li>

				<li class="projet">I wanna know</li>

				<li class="description">La plateforme qui t'informe sur les <span id="randomWord">prix</span> des concerts en Belgique.</li>
			</ul>
			
		</section><!--end baseline-->


		<section class="recherche" id="recherche">
		
			<nav class="index">
				<ul>
					
					<li class="logo onlypad"><a href="index.php">I Wanna know</a></li>

					<li><a href="contact.php">Contact</a></li>
					
					<?php 

						if($_SESSION['login']){

							include 'user/connecter.php';
						}

						else{

							include 'user/nonConnecter.php';
						}

					 ?>
					

				</ul>
			</nav>

			<form class="know" action="#" method="POST">

				<p>
					<?php
						if($vide['usersearch']){
						echo $vide['usersearch'];
						}

						if($error['noResult']){

							echo $error['noResult'];
						}
					?>
				</p>
				
				<div>
					<label for="usersearch">à quel évènement assistes-tu?</label> 
					<input type="text" name="usersearch" id="usersearch" placeholder="Nom de l'artiste ou de l'event"/>
				</div>
				

				<div>
					<input type="submit" value="J'y participe !">
				</div>
			</form>

		</section><!--end recherche-->


	</div><!--end container-->
	
	<script src="js/random.js"></script>


	<script>


	var delai = setTimeout(function(){
		
		document.getElementById("baseline").classList.add("demi");
		document.getElementById("recherche").classList.add("pos");


	},2000);

	</script>
	
</body>
</html>