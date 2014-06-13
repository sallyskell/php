<?php
	session_start();
	unset($_SESSION['login']);	
	session_destroy();
	header('Location: http://sabrina-casciato.be/tfe/juin/index.php');


 ?>