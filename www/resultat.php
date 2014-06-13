<?php 
	session_start();
	include 'php/verifSearch.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title>Résultat de la recherche | I wanna know</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/font.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css">
	<link rel="icon" type="image/png" href="img/favicon.png"> 
</head>
<body>
	
	<div class="grille"></div>

	<div class="container">

		<header>
			<nav>
				<ul>
					<li class="logo"> 
						<a href="index.php"></a> 
					</li>
					
					<li><a href="contact.php">Contact</a></li>
					<?php 

						if($_SESSION['login']){

							include 'user/connecter.php';
						}

						else{

							include 'user/nonConnecter.php';
						}

					 ?>
					<li class="loupe"><a href="#">ta recherche</a></li>
				</ul>
			</nav>


			<section class="search">

				<form action="#" method="POST">

					<div>

						<label for="usersearch">à quel évènement assistes-tu?</label>

						<input type="text" name="usersearch" id="usersearch" value="<?php echo $_SESSION['name']; ?>">

					</div>

					<div>
						<input type="submit" id="submit" value="Modifier">
					</div>

				</form>
				
			</section><!--end section search-->
			
		</header><!--end header-->


		<div class="content foriphone">

			<h3>Résultat pour la recherche "<span id="result"></span>" </h3>

			<section id="searchResult">

				<ul class="square" >
					<li>
						<a class="event" href="informations.php">
							<h3 id="titleevent">Miley Cyrus au Sportpaleis</h3><span id="dateevent">14 Juin 2014</span>
							<span id="picresult"></span>
						</a>
					</li>
				</ul>


			<!-- 	<ul class="square">
					<li>
						<a class="event" href="informations.php">
							<h3>Miley Cyrus à Forest National <span>30 Nov 2014</span></h3>
						</a>
					</li>
				</ul> -->


				<ul class="ajout square">
					<li>
						<p>Ton évènement ne fait pas partie des résultats? Ajoutes-le!</p>
						<a href="contact.php">Suggérer un évènement</a>
					</li>
				</ul>




			</section>
			
		</div><!--end content-->

		
	</div><!--end container-->



	<script src="js/search.js"></script>
	<script src="js/square.js"></script>
	<script src="js/replacetxt.js"></script>
	<script src="js/getId.js"></script>


	
</body>
</html>