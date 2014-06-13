<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title> Ta checklist | I wanna know </title>
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

						<label for="recherche">à quel évènement assistes-tu?</label>

						<input type="text" name="recherche" id="recherche" value="<?php echo $_SESSION['name']; ?>">

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

						
						<?php 

							if($_SESSION['login']){

								echo"<li class=\"check\"><a class=\"actif\">Checklist</a></li>";
							}

							else{

								echo "<a><p class=\"dash\">Checklist</p></a>";
							}

						 ?>
						
						
					</ul>
				</div>

			 <section class="infos lacheck">

			 <h2>Peur d'oublier quelque chose?</h2>
			 	
			 	<form class="laliste"method="post" action="#">

				     <p>Personnalise ta checklist, en sélectionnant ce qui te semble important</p>
						
						<ul>
							
							<li>
								<div>
									<input type="checkbox" name="ticket" id="ticket"/> 
						      		<label for="ticket">Mon ticket</label>	
								</div>
						       
								<div>
									<input type="checkbox" name="papiers" id="papiers"/> 
						       		<label for="papiers">Ma carte d'identité</label>					
								</div>
						    
								<div>
									<input type="checkbox" name="train" id="train"/> 
							       	<label for="train">Mon ticket de train</label>	
								</div>
						       
								<div>
									<input type="checkbox" name="Plan" id="Plan"/> 
						       		<label for="Plan">Un plan/Gps</label>
								</div>
						       
								<div>
									<input type="checkbox" name="argent" id="argent"/> 
						       		<label for="argent">Du liquide</label>
								</div>
							</li>

					       	<li>
								<div>
									<input type="checkbox" name="banque" id="banque"/> 
						       		<label for="banque">Ma carte bancaire</label>	
								</div>
						       
								<div>
									<input type="checkbox" name="boisson" id="boisson"/> 
						       		<label for="boisson">De quoi boire</label>		
								</div>
						       
								<div>
									<input type="checkbox" name="miam" id="miam"/> 
						      		 <label for="miam">De la nourriture</label>		
								</div>
						       
								<div>
						       		<input type="checkbox" name="mouchoirs" id="mouchoirs"/> 
						       		<label for="mouchoirs">Des mouchoirs</label>
								</div>

								<div>
						       		<input type="checkbox" name="boule" id="boule"/> 
						       		<label for="boule">Des boulequiès</label>
								</div>
							</li>
							
							<li class="pref">
								<div>
						       		<input type="checkbox" name="photo" id="photo"/> 
						       		<label for="photo">Mon appareil photo</label>
								</div>

								<div>
						       		<input type="checkbox" name="gsm" id="gsm"/> 
						       		<label for="gsm">Mon gsm</label>
								</div>

								<div>
						       		<input type="checkbox" name="clope" id="clope"/> 
						       		<label for="clope">Mes cigarettes</label>
								</div>

								<div>
						       		<input type="checkbox" name="shirt" id="shirt"/> 
						       		<label for="shirt">Mon tshirt de fan</label>
								</div>
							</li>

							<li class="mem">
								<div>
									<input type="submit" value="enregistrer">
								</div>
							</li>

						</ul>

				</form>
			 	
				
			</section><!--end section infos
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