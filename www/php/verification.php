<?php
		$erreur = []; //initialisation du tableau pour reconnaissance//
		$validation = false;
		error_reporting(E_WARNING);

		function valid_mail($mail){

			return filter_var($mail, FILTER_VALIDATE_EMAIL);
			//!filter_var($email, FILTER_VALIDATE_EMAIL)
		}

		if( (count($_POST)) > 0){


			extract($_POST);
			$mess = trim(strip_tags($mess));
			$nom = trim(strip_tags($nom));
			$mailExp = trim(strip_tags($mail));
			
			if(valid_mail($mailExp) == false){// si valid mail est faux, on affiche le message d'erreur//

				$erreur['mail']= "Ton mail n'est pas valide";
			}

			if($nom==""){ // si le nom est vide, on affiche le message d'erreur//

				$erreur['nom']= "Pas de prénom?";			
			}

			if($mess==""){ // si le message est vide, on affiche le message d'erreur//

				$erreur['mess']= "Ton message est vide";
			}

			else{

				// echo "c'est bon";
				$validation = true;
				 $to      = 'sabrina.casciato@gmail.com';
			     $subject = 'I wanna now | Message envoyé par un utilisateur';
			     $headers = "From:".$nom."<".$mailExp.">"."\r\n" .
			     'Reply-To:'. $mailExp . "\r\n" .
			     'X-Mailer: PHP/' . phpversion();

			     mail($to, $subject, $mess, $headers);
			}


		}

	?>	