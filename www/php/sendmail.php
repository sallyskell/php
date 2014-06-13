<?php 

	$to = $mailExp;
    $subject = 'Activation compte | I wanna now';

    
    $message ='Hello! Merci de t\'être inscris sur IWK'."\n\n";
    $message .= 'Pour commencer dés à présent à profiter des avantages que t\'offre ton compte, il te suffit de l\'activer en cliquant sur ce lien'."\n";
    $message .='http://sabrina-casciato.be/tfe/juin/connexion.php?log=' . urlencode($login) . '&cle=' . urlencode($cle) ."\n\n"; 
    $message .= 'Et au cas où tu aurais un trou de mémoire...' . "\n";
    $message .= 'Ton login : ' . $login . "\n";
    $message .= 'Ton mot de passe : ' . $password;


    $headers = 'From: <sabrina.casciato@gmail.com>'."\n";
	$headers ='Reply-To: sabrina.casciato@gmail.com'."\n";
	$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
	$headers .='Content-Transfer-Encoding: 8bit'."\n"; 
	$headers .= 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);  
    $verification = true; 
?>

