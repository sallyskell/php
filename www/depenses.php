<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Les dépenses | I wanna know </title>
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


		<div class="content">

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
							<a href="consommations.php"><p>Consommations</p></a>
						</li>

						<li class="depenses">
							<a class="actif" href="depenses.php"><p>Dépenses</p></a>
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

			 <section class="infos fric">

			 	<h2>Les dépenses supplémentaires éventuelles</h2>
			 		<section class="popup navi">
						<p>La checklist personnalisée n'est accessible qu'en tant qu'utilisateur!</p>

			 			<p>N'attends plus, inscris-toi ou connectes-toi pour en profiter. Tu découvriras d'autres avantages comme la mise en mémoire d'une recherche, le partage d'informations entre les utilisateurs et la possibilité d'inviter tes amis.</p>

			 			<p><a href="connexion.php">Je me connecte</a> <a href="inscription.php">Je veux m'inscrire!</a></p>
					</section>


			 	<ul class="explicatif">
			 		<li>
			 			<p>On a souvent tendance à se baser sur le prix de notre ticket de concert, mais n'oublions pas que sur place d'autres dépenses nous attendent.</p>

			 			<p>Les prix qui sont communiqués sont une approximation des prix réels sur place, basés sur différentes recherches et témoignages.</p>

			 			<p class="bancontact"><span></span>Et si vous avez oublié de passer à la banque, pas de panique, un distributeur Bancontact &amp; Master cash est placé à l'entrée. Sachez tout de même que tous les payements à l'intérieur du site se font en liquide, prévoyez le nécessaire. </p>

			 		</li>

			 		<li class="pettition">
			 			<p>Envie de connaitre les prix précis?</p>

			 			<p>Nous aussi! Nous aimerions pouvoir vous communiquer les prix détaillés des dépenses supplémentaires sur place. Ces prix sont peu communiqués et discrets sur la toile.</p>

			 			<p>Joins-toi à nous, et signes notre pétition <span>"I want more"</span> pour faire comprendre aux organisateurs que nous en sommes en droit de connaitre ces prix.</p>

			 			<p class="more"><a>I want more</a></p>
			 		</li>

			 	</ul>

			 <!-- 	<section class="popup sec" div=" up">
			 			<p>Pour pouvoir signer la pétition, tu dois avoir un compte et être connecté...</p>

			 			<p>Pas encore de compte? Attends, ne pars pas! Sais-tu qu'en t'inscrivant tu pourras personnaliser ta checklist, la line-up de tes festivals, mettre de côté des informations primordiales et surtout participer à la pétition?</p>

			 			<p><a href="#">Je me connecte</a> <a href="#">Je veux m'inscrire!</a></p>
			 			
			 		</section> -->

			 	<ul class="consos">
			 		<li class="square">
			 			<span class="sketch"></span>
			 			<p><span class="titre">Nourriture</span>De 3 à 10€ pour un repas</p>
			 		</li>
			 		<li class="square">
			 			<span class="sketch lock "></span>
			 			<p><span class="titre">Casiers/Vestiaires</span>5€ caution + 5€ </p>
			 		</li>
			 		<li class="square">
			 			<span class="sketch boulequies"></span>
			 			<p><span class="titre">Boulequies</span>2€</p>
			 		</li>
			 		<li class="square">
			 			<span class="sketch parking"></span>
			 			<p><span class="titre">Le parking</span>De 0 à 5€</p>
			 		</li>
			 		<li class="square">
			 			<span class="sketch boisson"></span>
			 			<p><span class="titre">Boissons</span>De 2€50 à 8€</p>
			 		</li>
			 		<li class="square">
			 			<span class="sketch toilet"></span>
			 			<p><span class="titre">Toilettes</span>de 0,50€ à 2€</p>
			 		</li>
			 		<li class="square">
			 			<span class="sketch merch"></span>
			 			<p><span class="titre">Boutique</span>Selon l'event</p>
			 		</li>
			 		<li class="square newdepense">
			 			<p>Tu as déjà rencontré d'autres types de dépenses que celles-ci? </p>
						
						<p>
			 			<a href="contact.php">Partage les avec nous</a>
			 			</p>

			 		</li>
			 	</ul>

					<h2 class="fu">Ce que tu trouveras dans la boutique</h2>
			
			 		<ul id="marchandises"class="marchandises">

			 			<li class="book">
			 				<p><span class="boutique"></span></p>
			 				<span class="price boutique"></span>
			 			</li>

			 			<li class="bag">
			 				<p><span class="boutique"></span></p>
			 				<span class="price boutique"></span>
			 			</li>

			 			<li class="weed">
			 				<p><span class="boutique"></span></p>
			 				<span class="price boutique"></span>
			 			</li>

			 			<li class="shirt">
			 				<p><span class="boutique"></span></p>
			 				<span class="price boutique"></span>
			 			</li>

			 			<li class="legging">
			 				<p><span class="boutique"></span></p>
			 				<span class="price boutique"></span>
			 			</li>

			 			<li class="key"><p><span class="boutique"> </span></p>
			 			<span class="price boutique"></span>
			 			</li>

			 		</ul>

			 		<span ="fuck"></span>

			 	

			 </section><!--end section infos fric-->

		</div><!--end content-->


	</div><!--end container-->


	<script src="js/scroll.js"></script>
	<script src="js/search.js"></script>
	<script src="js/square.js"></script>
	<script src="js/popup.js"></script>
	<script src="js/replacetxt.js"></script>
	<script src="js/getId.js"></script>

	
</body>
</html>