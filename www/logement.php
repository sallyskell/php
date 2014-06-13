<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Les logements | I wanna know </title>
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
							<a href="mobilite.php"><p>Mobilité</p></a>
						</li>

						<li class="bouffe">
							<a href="consommations.php"><p>Consommations</p></a>
						</li>

						<li class="depenses">
							<a href="depenses.php"><p>Dépenses</p></a>
						</li>

						<li class="logement"><a class="actif" href="logement.php"><p>Logement</p></a>
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

			 <section class="infos loge">

			 	<h2>Où loger après ton concert?</h2>

			 	<h2>Auberges de jeunesse</h2>

			 	<section class="popup navi">
						<p>La checklist personnalisée n'est accessible qu'en tant qu'utilisateur!</p>

			 			<p>N'attends plus, inscris-toi ou connectes-toi pour en profiter. Tu découvriras d'autres avantages comme la mise en mémoire d'une recherche, le partage d'informations entre les utilisateurs et la possibilité d'inviter tes amis.</p>

			 			<p><a href="connexion.php">Je me connecte</a> <a href="inscription.php">Je veux m'inscrire!</a></p>
					</section>

			 	<article class="boomerang">
			 		<h4>Boomerang Hostel</h4>

			 		<ul>

			 			<li class="square lit"></li>

			 			<li class="motel">
			 				<p class="addres">Lange Leemstraat 95, 2018 Anvers</p>
			 				<p>+32 3 238 47 82 </p>
			 				<p class="email"><a href="mailto:boomeranghostel@hotmail.com">Envoyer un mail</a></p>
							<p class="web"><a href="http://www.boomeranghostel.be/">Site web</a></p>
							<p class="nuit">A partir de 12€/nuit</p>
							<p class="distance">5,3 km du Sportpaleis</p>
			 			</li>


			 			<li class="dublabla">
			 				<p>Cet hôtel est plus facilement accessible en voiture qu'en tram via la E19 et N184. Compter entre 9 et 14minutes pour vous y rendre, selon la circulation.</p>

			 				<p>Le petit déjeuner n'est pas compris dans le prix mais il est accessible pour la modique somme de 2,50€.</p>

			 				<p>En l'espace communal, vous pouvez manger, regarder la télévision, jouer aux échecs et profiter du WIFI gratuit.</p>

			 			</li>
			 		
			 		</ul>

			 	</article>



			 	<article class="abhostel">
			 		<h4>Abhostel</h4>

			 		<ul>

			 			<li class="square lit"></li>

			 			<li class="motel">
			 				<p class="addres">Kattenberg 110, Anvers </p>
			 				<p> +32 473 57 01 66 </p>
			 				<p class="email"><a href="mailto:abhostel@hotmail.com">Envoyer un mail</a></p>
							<p class="web"><a href="http://www.abhostel.com/index.php">Site web</a></p>
							<p class="nuit">A partir de 19€/nuit</p>
							<p class="distance">3 km du Sportpaleis</p>
			 			</li>


			 			<li class="dublabla">
			 				<p>L'auberge est située a proximité de la gare centrale et du centre ville. Un arrêt de bus se trouve juste au niveau de la maison.</p>

			 				<p>Plusieurs magasins et suprettes sont situés a proximité. Ce qui est très pratique si vous désirez préparer vos propres repas.</p>

			 				<p>Dans la salle de séjour, des jeux, DVD's, internet, guides de voyage et livres sont mis à votre disposition. L'ambiance est propice a l'échange avec d'autres voyageurs.  </p>

			 			</li>
			 		
			 		</ul>

			 	</article>

			 	<article class="alias">
			 		<h4>Alias Youthhostel</h4>

			 		<ul>

			 			<li class="square lit"></li>

			 			<li class="motel">
			 				<p class="addres">Provinciestraat 256 2018 Anvers</p>
			 				<p>+32 3 230 05 22</p>
			 				<p class="email"><a href="mailto:guests@aliasyouthhostel.com">Envoyer un mail</a></p>
							<p class="web"><a href="http://aliasyouthhostel.com/">Site web</a></p>
							<p class="nuit">A partir de 19€/nuit</p>
							<p class="distance">4,5 km du Sportpaleis</p>
			 			</li>


			 			<li class="dublabla">
			 				<p>L'auberge est située dans le centre d'Anvers et à proximité de deux stations de métro. Il y a aussi une station du tram nº11 à seulement 50 mètres.</p>

			 				<p>Le petit déjeuner est compris dans le prix et vous pourrez profiter du WIFI gratuit dans les pièces communes.</p>

			 				<p>Il n'y a pas de parking, il est donc conseillé de s'y rendre via les transports en communs.</p>

			 			</li>
			 		
			 		</ul>

			 	</article>


			 	<h2>Hôtels</h2>

			 				 	<article class="raza">
			 		<h4>Ramada Plaza Antwerp</h4>

			 		<ul>

			 			<li class="square lit"></li>

			 			<li class="motel">
			 				<p class="addres">Desguinlei 94 2018 Anvers</p>
			 				<p>+32 3 244 82 11</p>
			 				<p class="email"><a href="mailto:info@ramadaplaza-antwerp.com">Envoyer un mail</a></p>
							<p class="web"><a href="http://www.ramadaplaza-antwerp.com">Site web</a></p>
							<p class="nuit">40€/personne</p>
							<p class="distance">6,6 km du Sportpaleis</p>
			 			</li>


			 			<li class="dublabla">
			 				<p>Cet hôtel est facile d'accès depuis le Sportpaleis, que ce soit en voiture ou en tramway dont l'arrêt se trouve juste à l'arrière du Ramada Plaza.</p>

			 				<p>Dans le prix sont compris une boisson de bienvenue ainsi qu'un buffet petit déjeuner pour deux personnes (selon disponibilité).</p>

			 				<p>De plus, en une dizaine de minutes, vous pouvez rejoindre le centre d'Anvers. </p>

			 			</li>
			 		
			 		</ul>

			 	</article>



			 	<article class="express">
			 		<h4>Express by Holiday Inn</h4>

			 		<ul>

			 			<li class="square lit"></li>

			 			<li class="motel">
			 				<p class="addres">Italiëlei 2A 2000 Anvers</p>
			 				<p>+32 3 221 49 49</p>
			 				<p class="email"><a href="mailto:reservations@hiexpress-antwerp.com">Envoyer un mail</a></p>
							<p class="web"><a href="http://www.hiexpress.com/hotels/fr/fr/reservation">Site web</a></p>
							<p class="nuit">44€/personne</p>
							<p class="distance">3,3 km du Sportpaleis</p>
			 			</li>


			 			<li class="dublabla">
			 				<p>Très proche du Sportpaleis, l'hôtel est uniquement accessible en voiture. Une navette est prévue à cet effet pour une valeur de 10€/personne.</p>

			 				<p>Dans le prix sont compris une boisson de bienvenue ainsi qu'un buffet petit déjeuner pour deux personnes (selon disponibilité).</p>

			 				<p>L'hôtel possède un parking souterain et un accès wifi, entièrement gratuits. </p>

			 			</li>
			 		
			 		</ul>

			 	</article>

			 	<article class="etap">
			 		<h4>Etap Hotel Anvers Port</h4>

			 		<ul>

			 			<li class="square lit"></li>

			 			<li class="motel">
			 				<p class="addres">Luithagen Haven 6a 2030 Anvers</p>
			 				<p>+32 3 544 97 81</p>
			 				<p class="email"><a href="mailto:h7857@accor.com">Envoyer un mail</a></p>
							<p class="web"><a href="http://www.accorhotels.com/fr/hotel-7857-ibis-budget-antwerpen-port/index.shtml?xtor=ADC-5013-%255bSportpaleis-7857%255d">Site web</a></p>
							<p class="nuit">49€/chambre</p>
							<p class="distance">5 km du Sportpaleis</p>
			 			</li>


			 			<li class="dublabla">
			 				<p>L'hôtel est situé dans la zone portuaire, une zone calme et agréable pour passer la nuit.</p>

			 				<p>Le petit déjeuner revient à 7€/personne, mais le parking et le wifi, eux, sont gratuits.</p>

			 				<p>Vous pouvez vous y rendre en voiture, et en tram, gratuit grâce à votre billet.</p>

			 			</li>
			 		
			 		</ul>

			 	</article>


			 	<article class="novotel">
			 		<h4>Novotel Anvers</h4>

			 		<ul>

			 			<li class="square lit"></li>

			 			<li class="motel">
			 				<p class="addres">Luithagen 6 2030 Anvers</p>
			 				<p>+32 3 542 03 20</p>
			 				<p class="email"><a href="mailto:H0465-RE@accorhotels.com">Envoyer un mail</a></p>
							<p class="web"><a href="http://www.accorhotels.com/fr/hotel-0465-novotel-antwerpen/index.shtml?xtor=ADC-5013-%5bSportpaleis-7857%5d">Site web</a></p>
							<p class="nuit">85€/chambre</p>
							<p class="distance">5 km du Sportpaleis</p>
			 			</li>


			 			<li class="dublabla">
			 				<p>L’hôtel est localisé à seulement 5 minutes du Parking Metropolis où vous pouvez laisser gratuitement votre véhicule sur le parking.</p>

			 				<p>Le tram (arrêt Metropolis) vous amène directement au Sportpaleis gratuitement grâce à votre place de concert.</p>

			 				<p>Le buffet petit déjeuner est compris dans le prix.</p>

			 			</li>
			 		
			 		</ul>

			 	</article>
	
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