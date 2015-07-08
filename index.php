<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="index_style.css">
	<title></title>
</head>
<body>

	<h1>INSCRIPTION</h1>
	<form method="POST" action="inscription.php" name="inscription">
		pseudo: <input type="text" name="pseudo" /><br/>
		mot de passe: <input type="password" name="password"/><br/>
		email: <input type="email" name="email" /><br/>
		<input type="submit" value="valider" name="valider_inscription" class="val"/>
	</form><br/><br/><br/>


	<h1>DEJA MEMBRE</h1>
	<h2>Se loguer</h2>
	<form method="POST" action="membre_verif.php" name="log">
		pseudo: <input type="text" name="pseudo2" /><br/>
		mot de passe: <input type="password" name="password2"/><br/>
		<input type="submit" value="valider" name="valider_log" class="val"/>

	</form>


</body>
</html>