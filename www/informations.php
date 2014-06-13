<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Informations générales | I wanna know </title>
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
						<a href="index.php">i wanna know</a> 
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


		<div class="content court">

				<div class="futurnav">
					<ul>
						<li><a class="actif" href="informations.php"><p class="dispnone"><?php echo $_SESSION['name']; ?></p></a></li>

						<li>
							<a href="tickets.php"><p>Tickets</p></a>
						</li>

					<!-- 	<li class="deroulement">
							<a href="lineup.php"><p>Line-up</p></a>
						</li> -->

						<li class="endroit">
							<a href="lieu.php"><p>Lieu</p></a>
						</li>

						<li class="mobilite">
							<a href="mobilite.php"><p>Mobilité</p></a>
						</li>

						<li class="bouffe">
							<a href="consommations.php"><p>Consommations</p></a>
						</li>

						<li class="depenses">
							<a href="depenses.php"><p>Dépenses</p></a>
						</li>

						<li class="logement">	
							<a href="logement.php"><p>Logement</p></a>
						</li>

						<li class="check">
							<?php 

								if($_SESSION['login']){

									echo "<a href='checklist.php'><p>Checklist</p></a>";
								}

								else{

									echo "<a><p class=\"dash\">Checklist</p></a>";
								}

							 ?>
						</li>
						
					</ul>
				</div>

			 <section class="infos">

			 	<h2>Informations générales</h2>

				<ul class="picture square">
					<li id="artistpic"pos="0"></li>	
					<li id="artistpic1"class="artiste" pos="1"></li>
					<li id="artistpic2"class="lieu" pos="2"></li>
					<li id="artistpic3"class="concert" pos="3"></li>
				</ul>

				<ul class="details" id="details">
					<li class="date"><p></p></li>
					<li class="horaire"><p></p></li>
					<li class="partie"><p></p></li>
					<li class="lieu"><p>Palais des Sports d'Anvers</p></li>
					<li class="adresse">
						<p>Schijnpoortweg 119</p>
						<p>2170 Merksem (Anvers)</p>
					</li>
					<li class="tickets"><p><a href="#">Commander</a></p></li>
					<li class="tournee"><p></p></li>
					<li class="site"><p><a href="#">Site officiel</a></p></li>
				</ul>

				<div class="meteo more">

							<?php 

								if($_SESSION['login']){

									echo "<a>ajouter cet event sur mon profil</a>";
						
								}

								else{

									echo "<a class=\"cant\">ajouter cet event sur mon profil</a>";
				
								}

							 ?>
					
				</div>
				
			</section><!--end section infos
			 -->

			 	<section class="popup ajout" div="up">
						<p>Tu dois avoir un compte ou être connecté pour pouvoir ajouter cet event à ton profil!</p>

			 			<p>N'attends plus, inscris-toi ou connectes-toi pour en profiter. Tu découvriras d'autres avantages comme la personnalisation des checklists, le partage d'informations entre les utilisateurs et la possibilité d'inviter tes amis.</p>

			 			<p><a href="connexion.php">Je me connecte</a> <a href="inscription.php">Je veux m'inscrire!</a></p>
				</section>
		</div><!--end content-->


	</div><!--end container-->


	
	<script src="js/scroll.js"></script>
	<script src="js/slide.js"></script>
	<script src="js/search.js"></script>
	<script src="js/square.js"></script>
	<script src="js/replacetxt.js"></script>
	<script src="js/getId.js"></script>
	

	<?php 

		if(!$_SESSION['login']){

			echo "<script src='js/popup.js'></script>";

		}


	 ?>

	
</body>
</html>