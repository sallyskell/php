<?php
	include 'php/verification.php';

	session_start();

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

	<div class="container special">

		<header class="without">
			<nav>
				<ul>
					<li class="logo"> 
						<a href="index.php">i wanna know</a> 
					</li>
					
					<li><a class="acti" href="contact.php">Contact</a></li>
					<?php 

						if($_SESSION['login']){

							include 'user/connecter.php';
						}

						else{

							include 'user/nonConnecter.php';
						}

					 ?>
					<li class="back" onclick="window.history.back();return false;"><a href="#">Retour à te recherche</a></li>
				</ul>
			</nav>


			<section class="search">

				<form action="#" method="POST">

					<div>

						<label for="recherche">à quel évènement assistes-tu?</label>

						<input type="text" name="recherche" id="recherche" placeholder="Miley Cyrus" required>

					</div>

					<div>
						<input type="submit" id="submit" value="Modifier">
					</div>

				</form>
				
			</section><!--end section search-->
			
		</header><!--end header-->


		<div class="content contact">

				<ul class="formu">

						<li>

							<h4>Envie de nous contacter?</h4>

							<p>Que ce soit pour nous poser des questions, donner votre avis, partager vos expériences, exprimer un coup de gueule ou nous faire parvenir des informations, n'hésitez pas!</p>

							<p>Parce que IWK c'est aussi ça, être à votre écoute et répondre du mieux possible à vos questions et vos besoins.</p>

							<p>Si vous nous soumettez un évènement ou une dépense, sachez que votre requête sera examinée avant d'être mise en ligne. Vous en serez bien évidemment tenu au courant par mail.</p>

						</li>

						<li>

							<form class="ctct" action="#" method="POST">
							
								<div>
									<p>
										<?php

											if($erreur['nom']){
											echo $erreur['nom'];
											}
										?>
									</p>
									<p class="transmis">
										<?php

											if ($validation == true) {
												echo "Ton message a bien été envoyé!";
											}
										?>
									</p>

									<input type="text" name="nom" id="nom" placeholder="Ton prénom">

								</div>

								<div>
									<p>
										<?php

											if($erreur['mail']){
											echo $erreur['mail'];
											}
										?>
									</p>

									<input type="mail" name="mail" id="mail" placeholder="Ton mail pour te recontacter">

								</div>

								<div>
									<p>
										<?php

											if($erreur['mess']){
											echo $erreur['mess'];
											}
										?>
									</p>

									<textarea name="mess" id="mess" placeholder="On t'écoute!"></textarea>
								</div>

								<div>
									
									<input type="submit" value="envoyer">

								</div>

							</form>

						</li>
			
				</ul><!--end ul contact-->

			
		</div><!--end content-->
		
	</div><!--end container-->
	

	
</body>
</html>