<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Le lieu | I wanna know </title>
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


		<div class="content pif">

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
							<a class="actif" href="lieu.php"><p>Lieu</p></a>
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

			 <section class="infos be">

			 	<h2>Le Sportpaleis d'Anvers</h2>

			 	<article class="theplace">
			 		<ul class="picture sportpaleis square">
			 			<li pos="0"></li>
			 			<li class="sport1" pos="1"></li>
			 			<li class="sport2" pos="2"></li>
			 			<li class="sport3" pos="3"></li>
			 			<li class="sport4" pos="4"></li>
			 		</ul>

			 		<ul class="information">
			 			<li>
			 				<p>Le Sportpaleis d’Anvers est un hall d‘événements de grande ampleur. Il accueille d’importants concerts et shows, des événements sportifs et des festivités.</p>

			 				<p>81ans après son inauguration, il fait toujours autant parler de lui! Selon <a href="http://www.pollstar.com/">"Pollstar"</a>, il serait classé au top 3 des meilleures salles de concert au monde.</p>
			 			</li>

			 			<li>
			 				<p>Le Sportpaleis a également sa "petite soeur", la Lotta Arena. Outre des concerts, elle accueille également des activités sportives. Sans oublier l'Hospitality Center pour les manifestations VIP. </p>
			 			</li>
			 		</ul>

			 		<ul class="history">
			 			<li>
			 				<p class="ad">Schijnpoortweg 119 2170 Merksem</p>
			 				<p class="phone">+32 3 400 40 40</p>
			 				<p class="mail"><a href="mailto:info@sportpaleis.be">info@sportpaleis.be</a></p>
			 				
			 			</li>	
			 			
			 			<li>
			 				<p class="construct">11 septembre 1933</p>
			 				<p class="superficie">11 600m²</p>
			 				<p class="contenance">23.001 personnes max</p>
			 				<!-- <a class="face" href="https://www.facebook.com/sportpaleis">Facebook</a>
			 				<a class="twit" href="https://twitter.com/sportpaleis">Twitter</a> -->
			 			</li>
			 		</ul>

			 	</article>

			 	<section class="plans">
			 		
			 		<h2>Plan du Sportpaleis et de sa salle</h2>

			 		<ul class="plan1">
			 			<li></li>
			 			<li class="legend">
			 				<p class="vente">Vente de billets</p>
			 				<p class="eat">Eat&amp;Greet</p>
			 				<p class="bar">Bar</p>
			 				<p class="merch">Boutique</p>
			 				<p class="casiers">Casiers</p>
			 				<p>Tickets boissons</p>
			 			</li>
			 		</ul>

			 		<ul class="plan2">
			 			<li>
			 			<svg id="svg" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="288px" height="550px" viewBox="0 0 288 550" enable-background="new 0 0 288 550" xml:space="preserve">
						<g id="cat2">
						<rect id="middenplein" x="110" y="204" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="74" height="119"/> </g>
						<g id="cat3">
							
								<rect x="53" y="294" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="53" height="12"/>
								<rect x="53" y="264" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="53" height="12"/>
								<rect x="53" y="279" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="53" height="12"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M89.882,337.061L90.447,325H53.81
									c0.212,7,0.963,14.473,2.218,21.439L89.882,337.061z"/>
								<rect x="188" y="294" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="46" height="12"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M53.758,322H106v-13H53v11.065
									C53,320.691,53.75,321,53.758,322z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M203.245,339.528l-21.6,2.812l43.859,26.893
									c2.714-7.206,4.832-13.847,6.293-21.819L203.245,339.528z"/>
								<rect x="188" y="279" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="46" height="12"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M123.944,429.576
									c6.375,1.667,13.059,2.553,20.007,2.553c0.269,0,0.535-0.011,0.803-0.013l-0.378-47l-13.13-1.27L123.944,429.576z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M90.587,339.528l-34.192,9.443
									c1.657,8.496,4.069,15.599,7.151,23.192l48.641-29.824L90.587,339.528z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M106,218H54.11c-0.241,4-1.11,5.307-1.11,8.838
									V230h53V218z"/>
								<rect x="53" y="249" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="53" height="12"/>
								<rect x="53" y="233" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="53" height="13"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M106,215v-11H55.901c-0.704,3-1.234,7-1.597,11
									H106z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M151.998,342.34l-5.93,0.848l1.616,88.846
									c6.574-0.3,12.901-1.393,18.933-3.201L151.998,342.34z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M132.092,338.528l-5.082-2.541
									l-62.605,38.238c7.543,17.646,18.79,32.378,32.775,42.569L132.092,338.528z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M136.751,341.069l-2.541-0.848
									l-34.517,78.343c6.719,4.528,14.032,8.027,21.833,10.338L136.751,341.069z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M157.929,341.069l-2.966,0.848l14.665,85.953
									c8.271-2.854,15.951-7.076,22.921-12.443L157.929,341.069z"/>
								<rect x="188" y="264" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="46" height="12"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M224.641,371.466l-59.937-36.325
									l-4.235,4.659l34.612,73.601C207.747,402.87,217.872,388.433,224.641,371.466z"/>
								<rect x="188" y="233" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="46" height="13"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M188,204v11h46.065c-0.15-4-0.48-8-0.977-11
									H188z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M188,230h46v-9.785
									c0-0.957,0.152-1.215,0.135-2.215H188V230z"/>
								<rect x="188" y="249" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="46" height="12"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M234,309h-46v13h46.145
									c0.007-1-0.145-1.309-0.145-1.935V309z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M203.385,325l0.565,12.061l28.192,7.834
									c1.095-6.488,1.755-13.895,1.951-19.895H203.385z"/>
							
							<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M243,223v105.834
								c0,59.876-45.124,111.4-98.847,111.4C90.432,440.234,47,388.71,47,328.834V223h-3v104.191c0,62.165,44.378,116.795,100.153,116.795
								S246,389.356,246,327.191V223H243z"/>
						</g>
						<g id="cat4">
							<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M143.5,67.896
								C67.949,67.896,7,136.159,7,220.365v109.269c0,84.207,60.949,152.47,136.5,152.47c75.552,0,136.5-68.263,136.5-152.47V220.365
								C280,136.159,219.052,67.896,143.5,67.896z M275,331.858c0,81.107-58.729,145.163-131.5,145.163
								c-72.77,0-131.5-64.056-131.5-145.163V219.835c0-81.106,58.73-146.856,131.5-146.856c72.771,0,131.5,65.75,131.5,146.856V331.858z"
								/>
							
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M173.612,444.857
									c-8.52,2.604-17.612,4.049-27.612,4.19v23.704c12-0.23,22.734-2.123,33.207-5.479L173.612,444.857z"/>
								<rect x="251" y="263" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="20" height="29"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M115.718,105.835
									c8.738-2.932,17.282-4.612,27.282-4.866V77.24c-12,0.179-22.759,2.152-33.484,5.69L115.718,105.835z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M271,221.454c0-9.223-0.15-18.261-1.641-27.038
									l-20.711,3.172c1.915,9.647,3.256,19.411,3.296,30.411H271V221.454z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M19.175,358.546l23.195-2.013
									C40.391,347.216,39.58,337,39.375,328H16v2.191C16,339.899,17.527,349.381,19.175,358.546z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M251,323.572c0,0.28,0.943,1.428,0.942,1.428
									H271v-30h-20V323.572z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M248.565,356.658l20.556,2.182
									c1.648-9.17,1.879-18.937,1.879-28.648V328h-19.084C251.711,337,250.562,347.303,248.565,356.658z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M248.375,194.362l21.16-2.56
									c-2.125-11.354-5.436-22.247-9.793-32.487l-20.121,7.982C243.356,175.795,246.3,184.867,248.375,194.362z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M43.127,359.948l-22.881,2.769
									c2.205,11.339,5.611,20.173,10.067,30.329l21.65-8.589C48.221,376.152,45.244,369.274,43.127,359.948z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M248.117,360.148
									c-2.162,9.465-5.209,16.47-9.047,24.878l20.213,8.02c4.457-10.156,7.862-18.99,10.067-30.329L248.117,360.148z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M42.295,197.732l-23.358-3.109
									C17.447,203.395,16,212.236,16,221.454V228h23.347C39.388,218,40.399,207.336,42.295,197.732z"/>
								<rect x="16" y="231" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="23" height="29"/>
								<rect x="16" y="263" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="23" height="29"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M39,323.572V295H16v30h23.349
									C39.348,325,39,323.853,39,323.572z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M42.874,194.561
									c2.031-9.354,4.902-18.3,8.544-26.693l-21.562-8.554c-4.358,10.241-7.669,21.133-9.793,32.487L42.874,194.561z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M113.625,443.725
									c-8.661-3.015-16.751-7.237-24.168-12.504L77.039,451.05c9.333,6.554,19.482,11.795,30.25,15.483L113.625,443.725z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M87.271,429.624
									c-6.858-5.15-13.108-11.211-18.667-18.036l-17.668,15.17c7.011,8.526,14.941,16.091,23.618,22.502L87.271,429.624z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M143,449.031
									c-9.001-0.243-18.113-1.813-26.701-4.568l-6.208,22.931c10.554,3.342,21.908,5.195,32.908,5.368V449.031z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M237.85,387.623
									c-3.965,8.207-8.697,15.814-14.12,22.675l16.675,14.293c6.883-8.722,12.826-18.391,17.652-28.815L237.85,387.623z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M66.886,409.426
									c-5.265-6.794-9.864-14.295-13.719-22.375l-21.625,8.726c4.825,10.424,10.768,20.093,17.651,28.814L66.886,409.426z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M200.655,432.044
									c-7.536,5.19-15.748,9.321-24.535,12.21l6.188,22.279c10.767-3.688,20.916-8.93,30.249-15.483L200.655,432.044z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M238.66,426.759l-16.671-14.314
									c-5.692,6.853-12.096,12.907-19.115,18.027l12.168,18.788C223.72,442.849,231.65,435.284,238.66,426.759z"/>
								<rect x="251" y="231" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="20" height="29"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M176.733,106.076
									c8.92,3.069,17.244,7.442,24.861,12.921l11.86-18.937c-9.404-6.854-19.654-12.352-30.54-16.235L176.733,106.076z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M52.585,165.256
									c3.775-8.219,8.299-15.876,13.487-22.837l-17.637-15.117c-6.793,8.893-12.641,18.72-17.377,29.27L52.585,165.256z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M224.553,141.538
									c5.346,7.033,10.004,14.794,13.886,23.144l20.1-8.11c-4.735-10.55-10.584-20.377-17.376-29.27L224.553,141.538z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M203.805,120.632
									c7.012,5.339,13.391,11.634,19.048,18.723l16.596-14.25c-6.965-8.758-14.862-16.561-23.519-23.195L203.805,120.632z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M50.148,125.106l17.603,15.114
									c5.523-7.058,11.755-13.347,18.605-18.717l-12.689-19.593C65.011,108.545,57.114,116.348,50.148,125.106z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="1.5" stroke-miterlimit="10" d="M88.533,119.845
									c7.494-5.555,15.689-10.03,24.48-13.227l-6.331-22.793c-10.886,3.883-21.136,9.381-30.54,16.235L88.533,119.845z"/>
								<path fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" d="M146,100.954
									c10,0.147,19.511,1.698,28.204,4.478l5.585-22.377C169.141,79.503,158,77.49,146,77.248V100.954z"/>
							
						</g>

						<g id="cat1">
						<rect id="scene" x="100" y="148" fill="#FFFFFF" stroke="#3FC380" stroke-width="2" stroke-miterlimit="10" width="97" height="48"/></g>
						</svg>

			 			</li>
			 			<li class="liste">
			 				<p class="active">Scène</p>
			 				<p>Middenplein</p>
			 				<p>Tribunes basses</p>
			 				<p>Tribunes supérieures</p>
			 			</li>
			 		</ul>

			 	</section><!--end section plans-->
			 	
			 		<section class="plans second">

			 		<h2>Plan externe de l'ensemble</h2>
			 		
			 		<div class="sportentier"></div>

			 		<ul class="petition">

			 			<li><p>Envie d'informations plus précises?</p></li>

			 			<li><p>Nous aussi! Nous aimerions pouvoir vous offrir des plans précis où sont situé les bars, casiers, toilettes, tickets et nourriture pour chaque étage.</p></li>

			 			<li class="larger"><p>Joins-toi à nous, et signes notre pétition <span>"I want more"</span> qui a pour but de faire prendre conscience aux propriétaires des salles et aux organisateurs de soirée que nous avons besoin de leur collaboration!</p></li>

			 			<li class="more"><a>I want more</a></li>

			 		</ul>


			 	</section><!--end section plans-->
				
			</section><!--end section infos be
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
	<script src="js/popup.js"></script>
	<script src="js/svg.js"></script>

	
</body>
</html>