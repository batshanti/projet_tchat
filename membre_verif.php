<?php 
	include 'class_membre.php';

$pseudo   = (isset($_POST['pseudo2'])) ? $_POST['pseudo2'] : '';
$password = (isset($_POST['password2'])) ? $_POST['password2'] : '';

if (!empty($pseudo) AND !empty($password)) {

	$membre = new membre($pseudo,$password);

	if ($membre->verif_membre_exist()) {

		if ($membre->verif_pass()) {
			header('location: /web/projet_1/tchat.php');
		}
		else {die('Mot de passe faux');}	

	}
	
}

?>		