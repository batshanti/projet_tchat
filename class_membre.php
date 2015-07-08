<?php 

	class membre {


private $pseudo = ''; 
private $pass   = '';
private $email  = '';

public function __construct($pseudo,$pass,$email='') {
	$this->pseudo = $pseudo;
	$this->pass   = $pass;
	$this->email  = $email;
}

public function getPseudo() {
	return $this->pseudo;
}

public function getPass() {
	return $this->pass;
}

public function getEmail() {
	return $this->email;
}

public function setPseudo($pseudo) {
	$this->pseudo = $pseudo;
}

public function setPass($pass) {
	$this->pass = $pass;
}

public function setEmail($email) {
	$this->email = $email;
}

public function verif_membre_exist() {
	$bdd = new PDO ('mysql:host=127.0.0.1;dbname=tchat;charset=utf8','shanti','shanti1');
	$content = $bdd->query('SELECT pseudo FROM membre');
	foreach ($content as $value) {
		$tab[] = $value['pseudo'];
	}
	$a = in_array($this->pseudo, $tab);

		if ($a) {return true;}
		else { return false;}
}

public function creer() {
	$bdd = new PDO ('mysql:host=127.0.0.1;dbname=tchat;charset=utf8','shanti','shanti1');
	$a = $this->pseudo;
	$b = $this->pass;
	$c = $this->email;
	$bdd->exec("INSERT INTO membre(pseudo,pass,email) VALUES('$a','$b','$c')");
}

public function verif_pass() {
	$bdd = new PDO ('mysql:host=127.0.0.1;dbname=tchat;charset=utf8','shanti','shanti1');
	$pseudo = $this->pseudo;
	$content = $bdd->query("SELECT pass FROM membre WHERE pseudo='$pseudo'");
		foreach ($content as $value) {
		$a = $value['pass'];
	}
	if ($a == $this->pass) {return true;}
		else {return false;}
}

}
 ?>