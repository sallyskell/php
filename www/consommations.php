<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Consommations | I wanna know </title>
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
						<li><a href="informations.php"><p class="dispnone"><?php echo $_SESSION['name']; ?></p></a></li>

						<li>
							<a href="tickets.php"><p>Tickets</p></a>
						</li>

						<!-- <li class="deroulement">
							<a href="lineup.php"><p>Line-up</p></a>
						</li> -->

						<li class="endroit">
							<a href="lieu.php"><p>Lieu</p></a>
						</li>

						<li class="mobilite">
							<a href="mobilite.php"><p>Mobilité</p></a>
						</li>

						<li class="bouffe">
							<a class="actif" href="consommations.php"><p>Consommations</p></a>
						</li>

						<li class="depenses">
							<a href="depenses.php"><p>Dépenses</p></a>
						</li>

						<li class="logement">	
							<a href="logement.php"><p>Logement</p></a>
						</li>

						<li class="check more">
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

			 <section class="infos be">

			 	<h2>De quoi boire et manger</h2>
			 	<section class="popup navi">
						<p>La checklist personnalisée n'est accessible qu'en tant qu'utilisateur!</p>

			 			<p>N'attends plus, inscris-toi ou connectes-toi pour en profiter. Tu découvriras d'autres avantages comme la mise en mémoire d'une recherche, le partage d'informations entre les utilisateurs et la possibilité d'inviter tes amis.</p>

			 			<p><a href="connexion.php">Je me connecte</a> <a href="inscription.php">Je veux m'inscrire!</a></p>
					</section>

			 	<article>
			 		<ul class="picture consom square">
			 			<li class="bouffe" pos="0"></li>
			 			<li class="bouffe1" pos="1"></li>	
			 			<li class="bouffe2" pos="2"></li>
			 			<li class="bouffe3" pos="3"></li>
			 		</ul>

			 		<ul class="information conso">
			 			<li>
			 				<p>Si vous avez envie de casser la croûte, avant, pendant ou après votre concert, plusieurs possibiltés s'offrent à vous!</p>

			 				<p>Au rez-de-chaussée du Sportpaleis, vous pouvez vous procurer des frites, des snacks et des boissons dans le ‘Eat &amp; Greet’</p>

			 				<p>Vous pouvez également vous rassasier aux comptoirs et stands présents au sein même de la salle. Ils se trouvent au rez-de-chaussée, au premier et au deuxième étage.</p>

			 				<p class="foripad">Et si vous avez une soif urgente, des distributeurs automatiques sont situés au rez-de-chaussée. Selon l'évènement, il y a même des ventes ambulantes dans la salle.</p>
			 			</li>

			 			<li>

			 				<p>Vous pouvez voir la disposition de quelques bars et du Eat&amp; Greet dans les informations lieu.</p>

			 				<p class="thelink"><a href="lieu.php">Regarder le plan</a></p>
			 				
			 			</li>
			 		</ul>

			 	</article>
				
			</section><!--end section infos be
			 -->
		</div><!--end content-->




	</div><!--end container-->


	<script src="js/scroll.js"></script>
	<script src="js/slide.js"></script>
	<script src="js/search.js"></script>
	<script src="js/square.js"></script>
	<script src="js/popup.js"></script>

	
</body>
</html>