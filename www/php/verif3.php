<?php 
	
	require 'php/database.php';

	$loginVerif = $_GET["log"];
	$cleVerif = $_GET["cle"];
	$activate = false;

	$comp = 'SELECT cle FROM members WHERE login="'.$loginVerif.'"';

	$req2 = $db->query($comp);
	

	while ($data2 = $req2->fetch()){
		
		if($data2['cle'] == $cleVerif){

			$activate = true;
		}
	} 
  	
  	$req2->closeCursor();  

  	if($activate == true){

  		$db->exec('UPDATE members SET state=1 WHERE login="'.$loginVerif.'"');


  	}  
?>