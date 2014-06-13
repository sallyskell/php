<?php 
	
	require 'php/database.php';//connexion à la database

	$usersearch = $_POST["usersearch"];
	$trouver = false;

	$sql = 'SELECT name, id FROM artistes';
  	$req = $db->query($sql);  //envoi de la requête à la database

  	while ($data = $req->fetch()){ //on boucle 
		
		if($data['name'] == $usersearch){

  			$_SESSION['name'] = $data['name'];
  			$_SESSION['id'] = $data['id'];
  			$trouver = true;
		}
		

	} 
  	
  	$req->closeCursor(); //on met fin à la requête

  	if($trouver == false){

  		$error['noResult'] = "Aucun résultat";
  	}

  	else{

  		header("Location: http://sabrina-casciato.be/tfe/juin/resultat.php");
  	}

 ?>
