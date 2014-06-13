<?php
	session_start();
	if($_SESSION['login']){

		header('Location: http://sabrina-casciato.be/tfe/juin/index.php');  
	}
	include 'php/verif3.php';
	include 'php/verifConnexion.php';	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<title>I wanna know</title>



	<link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/font.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css">
	<link rel="icon" type="image/png" href="img/favicon.png"> 

</head>
<body>

	<div class="grille"></div>
	
	<div class="container accueil">
		
		 <section class="baseline demi">

			<ul>
				
				<li class="logo"><a href="index.php">I wanna know</a></li>

				<li class="projet">I wanna know</li>

				<li class="description">La plateforme qui t'informe sur les <span id="randomWord">prix</span> des concerts en Belgique.</li>
			</ul>
			
		</section>


		<section class="recherche pos" >
		
			<nav class="index">
				<ul>
					
					<li class="logo onlypad"><a href="index.php">I Wanna know</a></li>

					<li><a href="contact.php">Contact</a></li>

					<?php 

						if($_SESSION['login']){

							include 'user/connecter.php';
						}

						else{

							include 'user/connexionActif.php';
						}

					 ?>

				</ul>
			</nav>

			<div class="monevent inscription">

					<form action="connexion.php" method="POST">

						<div class="activation">
							<p>
	
							<?php 

								if($activate == true){

									echo "Ton compte est activé, connectes toi!";
								}
							 ?>

						</p>
						</div>

						<div>
							<p>
								<?php

									if($error['login']){
									echo $error['login'];
									}
									elseif ($error['state']) {
										echo $error['state'];
									}
									elseif ($error['log']) {
										echo $error['log'];
									}

									
								?>
							</p>

							<label for="login">Login</label> 
							<input type="text" name="login" id="login" />
						</div>
						

						<div>
							<p>
								<?php

									if($error['password']){
									echo $error['password'];
									}
								?>
							</p>
							<label for="password">Mot de passe</label> 
							<input type="password" name="password" id="password" />
						</div>

						<div>
							<input type="submit" value="confirmer">
						</div>

						</form>
				
			</div>

		</section><!--end recherche-->

	</div><!--end container-->
	
	<script src="js/random.js"></script>

	
</body>
</html>