<?php 
	
 	try
	{
	    $db = new PDO('mysql:host=mysql51-101.perso;dbname=sabrinacmod1', 'sabrinacmod1', 'rUxy2sKy5KXj');
	    
	}//connexion à ma db
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}//en cas d'erreur, affichage d'un message

 ?>
 