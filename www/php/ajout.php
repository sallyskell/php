<?php 
	
	require 'php/database.php'; //accès à la database
	$cle = md5(uniqid(rand(), true));//on génère une clé d'activation unique

	$db->exec("INSERT INTO members(login, mail, password, cle) VALUES('$login', '$mail', '$password', '$cle')");
	include 'php/sendmail.php';// on récupère les données + la clé dans la database members et on inclu le fichier pour envoyer un mail contenant l'url
?>