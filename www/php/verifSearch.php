<?php 
	
	require 'php/database.php';//connexion à la database

	$search = true;

	if( (count($_POST)) > 0) {

		extract($_POST);
		$usersearch = trim(strip_tags($usersearch));

		if($usersearch == ""){
			$vide['usersearch'] = "Ta recherche est vide ! ";
		}

		else{
			include 'php/resultSearch.php';
		}
	}

 ?>