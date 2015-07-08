<?php 

	include 'class_membre.php';

$pseudo   = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$email    = (isset($_POST['email'])) ? $_POST['email'] : '';	

if (!empty($pseudo) AND !empty($password) AND !empty($email)) {

	$membre = new membre($pseudo,$password,$email);

	if ($membre->verif_membre_exist() == false) {
		$membre->creer();
	}
	else {
		echo 'Ce membre existe deja: ' ;
		die("<a href=\"http://batshanti.com/projet_1/index.php\">Retour a l\'index</a>");
}
}




 ?>