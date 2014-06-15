<?php 
	
 	try
	{
	    $db = new PDO('mysql:host=mysql51-101.perso;dbname=sabrinacmod1', 'xxxxxxx', 'xxxxxx');
	    
	}//connexion à ma db
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}//en cas d'erreur, affichage d'un message

 ?>
 
