<?php 
	
	// $error =[];
	$log = false;

	if( (count($_POST)) > 0){


		extract($_POST);
		$login = trim(strip_tags($login));
		$password = trim(strip_tags($password));

		if($login==""){ // si le nom est vide, on affiche le message d'erreur//

			$error['login']= "Pas de login ?";			
		}

		if($password==""){ // si le message est vide, on affiche le message d'erreur//

			$error['password']= "Pas de mot de passe ?";
		}

		else{

			require 'php/database.php';

			$sql = 'SELECT login FROM members';
			$req = $db->query($sql);  

			while ($data = $req->fetch()){
				
				if($data['login'] == $login){

					$log = true;
				}
			} 

  			$req->closeCursor();  

			if($log == true){

				$sql2 = 'SELECT password, state FROM members WHERE login="'.$login.'"';
				$req2 = $db->query($sql2);  
				while ($data2 = $req2->fetch()){
				
					if($data2['password'] == $password && $data2['state'] == 1){


						$_SESSION['login'] = $login;
						header('Location: http://sabrina-casciato.be/tfe/juin/index.php');
						// echo "Bienvenu" . $_SESSION['login'];
					}

					elseif($data2['state'] == 0 && $data2['password'] == $password) {
						
						$error['state'] = "Votre compte n'est pas activé, veuillez vérifier vos mails";
					}

					else{

						$error['log'] = "Login ou mot de passe incorrect";
					}
				} 

				$req2->closeCursor(); 
			}

			else{

				$error['log'] = "Login ou mot de passe incorrect";
			}
		}
	}
 ?>