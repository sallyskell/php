<?php 
	
	require 'php/database.php';//connexion à la database

	$already = false;
	$sql = 'SELECT mail, login FROM members'; //recupération des mails/login de la table members
  	$req = $db->query($sql);  //envoi de la requête à la database

  	while ($data = $req->fetch()){ //on boucle 
		
		if($data['mail'] == $mailExp){ //on vérifie si l'adresse mail n'est pas déjà utilisée

			$already = true;
			$erreur['dmail']= "Cette adresse mail est déjà inscrite";
		}

		if($data['login'] == $login){ // on vérifie si le login est libre

			$already = true;
  			$erreur['dlogin']= "Ce login n'est pas libre";	
		}
	} 
  	
  	$req->closeCursor(); //on met fin à la requête

  	if($already == false){ // si tout est disponible

  		include 'php/ajout.php';
  	}
 ?>