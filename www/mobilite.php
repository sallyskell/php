<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Mobilité| I wanna know </title>
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

					<!-- 	<li class="deroulement">
							<a href="lineup.php"><p>Line-up</p></a>
						</li> -->

						<li class="endroit">
							<a href="lieu.php"><p>Lieu</p></a>
						</li>

						<li class="mobilite">
							<a class="actif" href="mobilite.php"><p>Mobilité</p></a>
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

			 <section class="infos mobi">

			 	<h2>Comment me rendre au Sportpaleis?</h2>

			 		<section class="popup navi">
						<p>La checklist personnalisée n'est accessible qu'en tant qu'utilisateur!</p>

			 			<p>N'attends plus, inscris-toi ou connectes-toi pour en profiter. Tu découvriras d'autres avantages comme la mise en mémoire d'une recherche, le partage d'informations entre les utilisateurs et la possibilité d'inviter tes amis.</p>

			 			<p><a href="connexion.php">Je me connecte</a> <a href="inscription.php">Je veux m'inscrire!</a></p>
					</section>

			 	<ul class="car">
			 		<li>
			 			<h4>En voiture</h4>

			 			<p>Lors des évènements, la circulation aux alentours du Sportpaleis est souvent encombrée. C'est pourquoi il est recommandé de garer votre voiture dans un parc relais (Park+Ride, plus éloigné du site) et d'utiliser gratuitement les trams et bus.</p>

			 			<p>Si malgré tout vous souhaitez vous garer aux alentours du Sportpaleis, des parkings sont mis à votre disposition pour un tarif de 5€/voiture. Si par malchance il ne reste plus de places libres, il est aussi possible de se garer dans les quartiers d'habitation. Attention tout de même, certaines rues sont des zones bleues, la durée de stationnement y est donc limitée.</p>

			 			<p class="foripad">Pour les personnes à mobilité réduite ayant réservé leur place, un stationnement spécial dans le parking "Vaart" est mis à disposition pour une valeur de 5€. Ces places restent réservées jusqu‘à 30 minutes avant le début de l‘événement. Pensez a prendre votre carte européenne de stationnement pour personnes handicapées, votre carte d’identité et votre billet d’entrée en cas de contrôle.</p>

			 			<a href="pdf/plan_parking.pdf">Télécharger le plan</a>
			 		</li>

			 		<li class="plan_parking">

			 		</li>
			 	</ul>

			 	<ul class="rail">

			 		<li>
			 			<h4>En train</h4>	
			 			<iframe width="520" height="310" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=Gare%20d'Anvers%20&destination=Sportpaleis%2C%20Antwerp%2C%20Belgium&key=AIzaSyApuXwfFWS-1x-GV2NoRVfJH-PtgJQVNek"></iframe>
			 		</li>

			 		<li>
			 				<p>Vous pouvez vous rendre en train jusqu'à la gare d'Anvers qui se situe à 2,7km du Sportpaleis. De là, à l'Astridplein, des lignes de tram et bus sont présentes pour assurer la correspondance.</p>

			 				<p>Vous devez prendre les lignes 2, 3 et 5 de tram. Il y en a en continuité toutes les 5minutes. Le trajet depuis le gare vous prendra 7minutes selon la circulation.</p>

			 				<p>Les trams circulent tous les jours de 6h à 1h du matin. Assurez-vous de vérifier les horaires de retour, car certains trains ne circulent plus après 23h.</p>

			 				<a href="http://www.belgianrail.be/fr">Horaires de train</a>
			 		</li>

			 	</ul>

			 	<ul class="bus">

			 		<li>

			 				<h4>En tram ou bus</h4>

			 				<p>Votre billet est valable sur le réseau des bus et des trams à Anvers et en Flandre.
							Dans le but de limiter le traffic, le ‘combiticket’a été créé: en tant que visiteur du Sportpaleis ou de la Lotto Arena, vous avez la possibilité de prendre les transports en commun (bus et trams De Lijn). </p>

							<p>Tout déplacement A/R vers le Sportpaleis et la Lotto Arena avec les véhicules de la compagnie De Lijn est gratuit avec votre billet d’entrée. Pour rendre possible l’augmentation du nombre des trams et des bus, une contribution solidaire de 0,50 euros est demandée aux personnes possédant un ticket basique.</p>

			 				<p class="foripad">De Lijn veille à ce que le transport vers votre point de départ soit assuré immédiatement après la fin de l‘événement. Il est donc conseillé de <a class="link" href="http://www.delijn.be/index.htm">consulter les horaires</a> des derniers trams.</p>

							<p class="foripad">Et si jamais vous avez raté le dernier tram, il est aussi possible de prendre un bus. Tout le weekend, des bus de nuits circulent pour un prix aux alentours de 2/3€ le trajet. </p>

			 				<a href="http://www.delijn.be/images/Nachtschema%20sept-2012_tcm7-2785.pdf">Voir le plan des lignes de bus de nuit(en néerlandais)</a>
			 		</li>

			 		<li class="plan_tram">
			 			
			 		</li>

			 	</ul>

 				<span class="dsh"></span>
				
			</section><!--end section infos
			 -->
		</div><!--end content-->


	</div><!--end container-->


	<script src="js/scroll.js"></script>
	<script src="js/search.js"></script>
	<script src="js/square.js"></script>
	<script src="js/popup.js"></script>
	
	
</body>
</html>