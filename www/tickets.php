<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Tickets | I wanna know </title>
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
							<a class="actif" href="tickets.php"><p>Tickets</p></a>
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

			 <section class="infos tick">

				 <section class="categories">

				 		<h2>Les tickets</h2>

				 		<section class="popup navi">
						<p>La checklist personnalisée n'est accessible qu'en tant qu'utilisateur!</p>

			 			<p>N'attends plus, inscris-toi ou connectes-toi pour en profiter. Tu découvriras d'autres avantages comme la mise en mémoire d'une recherche, le partage d'informations entre les utilisateurs et la possibilité d'inviter tes amis.</p>

			 			<p><a href="connexion.php">Je me connecte</a> <a href="inscription.php">Je veux m'inscrire!</a></p>
					</section>

				 	<ul>

				 		<li  class="liste one">
				 			<p id="categorie1">b</p>
				 			<p id="categorie1detail"></p>
				 		</li>

				 		<li class="liste two">
				 			<p id="categorie2"></p>
				 			<p id="categorie2detail"></p>
				 		</li>

				 		<li class="liste three">
				 			<p id="categorie3"></p>
				 			<p id="categorie3detail"></p>
				 		</li>

				 		<li class="liste four">
				 			<p id="categorie4"></p>
				 			<p id="categorie4detail"></p>
				 		</li>

				 		<li class="liste three pack">
				 			<p id="categorie5"></p>
				 			<p id="categorie5detail"></p>
				 			<p id="categorie5pack"></p>
				 		</li>

				 		<li class="liste four pack">
				 			<p id="categorie6"></p>
				 			<p id="categorie6detail"></p>
				 			<p id="categorie6pack"></p>
				 		</li>

				 		<li>
				 			<a id="achat" href="#">Commander en ligne</a>
				 		</li>		 		
				 		
				 	</ul>
					
					<h2 class="second">Personnes à mobilité réduite</h2>

				 	<ul class="reduite">	
				 		
				 		<li><p>La salle dispose d'un certain nombre de places réservées pour les personnes à mobilité réduite et pour leurs accompagnateurs.</p></li>

				 		<li class="ot"><p>Nous demandons cependant à ces personnes de réserver leurs tickets au <span>070/345 345</span> afin d'assurer les services nécessaires.</p></li>
				 		
				 		<li><a href="http://www.diversite.be/la-culture-accessible-%C3%A0-tous-tickets-et-places-adapt%C3%A9es-aux-personnes-handicap%C3%A9es"> Plus d'informations</a></li>
				 	</ul>

			 	</section><!--end section catégorie-->

			 	<!-- <section class="sieges">
			 		
			 	</section> -->
			 	<section class="sieges">

			 		<!-- <ul class="disposition">
			 			<li>Scène</li>
			 			<li class="midden">Middenplein</li>
			 			<li class="tbasses">Tribunes basses</li>
			 			<li class="tsup">Tribunes supérieures</li>
			 		</ul> -->
			 		
			 	<!-- 	<ul class="legende">
			 			<li>Catégorie 1</li>
			 			<li>Catégorie 2</li>
			 			<li>Catégorie 3 &amp; Pack à 157€</li>
			 			<li class="active">Catégorie Arena &amp; Pack à 162€</li>
			 		</ul> -->

					<svg id="svg" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="342px" height="528px" viewBox="0 0 342 528" enable-background="new 0 0 342 528" xml:space="preserve">
					 <g id="cat4" class="four">
						<rect  x="129" y="168" fill="#3fc380" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="90" height="144"/>
					</g>
				<g id="cat3" class="three">
					<rect x="60" y="278" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="64" height="14"/>
					<rect x="60" y="241" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="64" height="14"/>
					<rect x="60" y="259" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="64" height="14"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M104.408,329.076L105.095,314H60.568
						c0.258,9,1.171,17.799,2.696,26.266L104.408,329.076z"/>
					<rect x="224" y="278" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="56" height="14"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M60.506,311H124v-16H60v13.841
						C60,309.602,60.497,311,60.506,311z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M242.179,332.494l-26.25,3.416
						l53.303,32.684c3.299-8.758,5.873-16.828,7.648-26.517L242.179,332.494z"/>
					<rect x="224" y="259" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="56" height="14"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M145.804,441.93
						c7.748,2.026,15.871,3.103,24.315,3.103c0.327,0,0.65-0.013,0.976-0.015l-0.46-57.121l-15.957-1.542L145.804,441.93z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M105.266,332.494L63.71,343.971
						c2.015,10.325,4.945,18.957,8.691,28.186l59.114-36.246L105.266,332.494z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M124,185H60.934
						C60.641,190,60,191.249,60,195.541V200h64V185z"/>
					<rect x="60" y="223" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="64" height="13"/>
					<rect x="60" y="203" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="64" height="17"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M124,181v-13H63.11c-0.855,3-1.5,8-1.94,13H124z
						"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M179.898,335.91l-7.207,1.031l1.965,107.975
						c7.988-0.364,15.679-1.692,23.01-3.89L179.898,335.91z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M155.706,331.278l-6.176-3.088
						l-76.085,46.472c9.167,21.445,22.835,39.349,39.832,51.735L155.706,331.278z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M161.368,334.367l-3.087-1.031
						l-41.949,95.212c8.167,5.503,17.054,9.756,26.535,12.563L161.368,334.367z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M187.106,334.367l-3.605,1.029
						l17.823,104.461c10.053-3.469,19.386-8.601,27.855-15.124L187.106,334.367z"/>
					<rect x="224" y="241" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="56" height="14"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M268.182,371.308l-72.842-44.146
						l-5.147,5.663l42.064,89.447C247.651,409.474,259.956,391.927,268.182,371.308z"/>
					<rect x="224" y="203" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="56" height="17"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M224,168v13h55.636c-0.183-5-0.584-10-1.187-13
						H224z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M224,200h56v-12.509
						c0-1.163-0.259-1.491-0.28-2.491H224V200z"/>
					<rect x="224" y="223" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="56" height="13"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M280,295h-56v16h55.731
						c0.009,0,0.269-1.398,0.269-2.159V295z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M242.349,314l0.688,15.076l34.263,9.312
						c1.33-7.887,2.133-16.389,2.371-24.389H242.349z"/>
				</g>
				<g id="cat1" class="one">
					<path fill="#ffffff" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M290,191v128.497
						c0,72.769-54.238,135.387-119.528,135.387C105.182,454.884,52,392.266,52,319.497V191h-4v126.5
						c0,75.55,54.187,141.943,121.972,141.943C237.756,459.443,294,393.05,294,317.5V191H290z"/>
					<path fill="#ffffff" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M169.5,2.376C77.682,2.376,4,85.337,4,187.674
						V320.47c0,102.338,73.682,185.298,165.5,185.298c91.82,0,165.5-82.96,165.5-185.298V187.674C335,85.337,261.32,2.376,169.5,2.376z
						 M330,323.173c0,98.571-71.561,176.418-159.998,176.418C81.562,499.591,10,421.744,10,323.173V187.03
						C10,88.459,81.562,8.553,170.002,8.553C258.439,8.553,330,88.459,330,187.03V323.173z"/>
				</g>
				<g id="cat2" class="two">
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M206.361,460.502
						c-10.354,3.164-21.361,4.92-33.361,5.092v28.809c14-0.28,27.532-2.58,40.26-6.658L206.361,460.502z"/>
					<rect x="301" y="239" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="23" height="36"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M135.826,48.484
						C146.445,44.921,156,42.879,169,42.57V13.731c-15,0.218-27.668,2.616-40.703,6.915L135.826,48.484z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M324,188.997
						c0-11.209,0.078-22.193-1.732-32.859l-25.038,3.88c2.325,11.723,4.086,22.982,4.135,36.982H324V188.997z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M18.668,355.605l28.094-2.688
						C44.355,341.594,43.275,329,43.026,318H15v3.146C15,332.945,16.665,344.468,18.668,355.605z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M301,313.103c0,0.341,0.363,0.897,0.362,0.897
						H324v-35h-23V313.103z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M297.257,353.071l24.72,2.771
						c2.006-11.145,2.023-22.894,2.023-34.696V318h-22.67C301.08,329,299.685,341.7,297.257,353.071z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M297.026,156.071l25.716-3.111
						c-2.583-13.798-6.605-27.036-11.901-39.482l-24.453,9.701C290.928,133.507,294.504,144.532,297.026,156.071z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M47.585,357.311l-27.807,3.365
						c2.68,13.779,6.819,24.516,12.235,36.858l26.311-10.438C53.776,377.004,50.158,368.645,47.585,357.311z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M296.714,357.554
						c-2.629,11.503-6.332,20.016-10.996,30.235l24.565,9.745c5.416-12.343,9.555-23.079,12.235-36.858L296.714,357.554z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M46.575,160.191l-28.197-3.79
						C16.567,167.062,15,177.794,15,188.997V197h27.992C43.042,185,44.271,171.863,46.575,160.191z"/>
					<rect x="15" y="201" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="28" height="34"/>
					<rect x="15" y="239" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="28" height="36"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M43,313.103V279H15v35h27.995
						C42.993,314,43,313.443,43,313.103z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M47.278,156.313
						c2.468-11.367,5.958-22.241,10.384-32.44l-26.205-10.395c-5.296,12.446-9.32,25.684-11.902,39.482L47.278,156.313z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M133.263,459.125
						c-10.525-3.664-20.359-8.796-29.372-15.196l-15.092,24.099c11.343,7.966,23.678,14.335,36.763,18.817L133.263,459.125z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M101.235,441.988
						c-8.335-6.26-15.931-13.625-22.686-21.92l-21.472,18.437c8.52,10.362,18.158,19.555,28.703,27.347L101.235,441.988z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M169,465.574
						c-12-0.296-22.031-2.205-32.468-5.553l-7.534,27.868c12.826,4.062,26.002,6.314,40.002,6.525V465.574z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M284.235,390.943
						c-4.819,9.976-10.57,19.221-17.161,27.558l20.266,17.37c8.363-10.6,15.586-22.35,21.452-35.019L284.235,390.943z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M76.46,417.441
						c-6.398-8.257-11.987-17.372-16.673-27.193l-26.281,10.605c5.864,12.668,13.086,24.418,21.452,35.018L76.46,417.441z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M239.032,444.93
						c-9.159,6.308-19.14,11.328-29.818,14.838l7.521,27.077c13.085-4.482,25.42-10.852,36.762-18.817L239.032,444.93z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M285.22,438.506l-20.26-17.396
						c-6.918,8.328-14.701,15.687-23.231,21.909l14.787,22.833C267.062,458.06,276.7,448.867,285.22,438.506z"/>
					<rect x="301" y="201" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="23" height="34"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M209.959,48.777
						c10.841,3.729,20.957,9.043,30.215,15.703l14.414-23.015c-11.429-8.33-23.886-15.012-37.117-19.731L209.959,48.777z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M59.08,120.699
						c4.588-9.989,10.086-19.294,16.392-27.754L54.038,74.573c-8.255,10.807-15.363,22.75-21.119,35.571L59.08,120.699z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M268.074,91.873
						c6.498,8.547,12.158,17.979,16.876,28.127l24.428-9.856c-5.755-12.822-12.863-24.764-21.118-35.571L268.074,91.873z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M242.859,66.467
						c8.521,6.489,16.274,14.139,23.148,22.754l20.17-17.317c-8.465-10.644-18.062-20.126-28.583-28.19L242.859,66.467z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M56.119,71.905l21.394,18.367
						c6.713-8.577,14.286-16.221,22.611-22.747L84.702,43.714C74.181,51.778,64.584,61.261,56.119,71.905z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.823" stroke-miterlimit="10" d="M102.769,65.51
						c9.107-6.751,19.067-12.189,29.751-16.075l-7.694-27.702c-13.23,4.72-25.687,11.401-37.115,19.731L102.769,65.51z"/>
					<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M173,42.551c12,0.179,23.516,2.064,34.08,5.442
						l6.887-27.195C201.025,16.482,187,14.035,173,13.742V42.551z"/>
				</g>
				<rect id="scene" x="117" y="100" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="117" height="58"/>
				</svg>


			 	</section>
			 	
				
			</section><!--end section infos
			 -->
		</div><!--end content-->

	</div><!--end container-->


	<script src="js/scroll.js"></script>
	<script src="js/search.js"></script>
	<script src="js/svg2.js"></script>
	<script src="js/popup.js"></script>
	<script src="js/replacetxt.js"></script>
	<script src="js/getId.js"></script>
	
	
</body>
</html>