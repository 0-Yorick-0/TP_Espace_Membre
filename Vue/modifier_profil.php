<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier Profil</title>
	<meta charset="utf-8" />
</head>
<body>

	<form method="post" action="../Modele/modifier_profil_sql.php">

		<label for="nouveau_pseudo">Modifier mon pseudo : </label><br /><input type="text" name="nouveau_pseudo" id="nouveau_pseudo" placeholder="<?php echo $_SESSION['pseudo'];?>" /><br />
		<label for="nouveau_pass">Entrez un nouveau mot de passe : </label><br /><input type="password" name="nouveau_pass" id="nouveau_pass" /><br />
		<label for="confirm_nouveau_pass">Confirmez votre nouveau mot de passe : </label><br /><input type="password" name="confirm_nouveau_pass" id="confirm_nouveau_pass" /><br />
		<label for="nouveau_mail">Modifier mon mail : </label><br /><input type="text" name="nouveau_mail" id="nouveau_mail" placeholder="<?php echo $_SESSION['email'];?>" /><br />
		<label for="pass">Pour valider, entrez votre mot de passe actuel: </label><br /><input type="password" name="pass" id="pass" required /><br />
		<input type="submit" name="Envoyer"><br />		

	</form>

	<form method="post" action="../Controleur/file_upload_check.php" enctype="multipart/form-data">

		<img src="../uploads/img/avatars/avatar_<?php echo $_SESSION['id'];?>.jpg" alt="Photo de profil" /><br />
		<label for="monfichier">Modifier mon avatar : </label><br /><input type="file" name="monfichier" /><br />
		<input type="submit" name="Envoyer l'image"><br />	

	</form>

	<?php

		if ($_GET['modif_ok'] == 1 AND isset($_GET['modif_ok']))
		{
			echo '<p><strong>Les modifications ont bien été prises en comptes</strong></p>';
		}
	?>


	<a href="../accueil.php">Retour à l'accueil</a>
</body>
</html>