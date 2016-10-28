<?php

include_once('../Controleur/modifier_profil_check.php');
include_once('connexion_sql.php');// connexion à la bdd



$req = $bdd->prepare('SELECT pass FROM membres WHERE id = :id');
$req->execute(array(
		'id' => $_SESSION['id']
	));

$resultat = $req->fetch();

$req->closeCursor();

//echo $resultat['pass'];
//echo sha1(htmlspecialchars($_POST['pass']));

if ($resultat['pass'] == $nouveau_pass)  // On vérifie que le mot de pass actuel correspond à celui en bdd
	{
		$modif_pass = $bdd->exec('UPDATE membres SET pass = \'' . $nouveau_pass . '\' WHERE id = \'' . $_SESSION['id'] . '\'');
	}
if ($nouveau_pseudo)
	{
		$modif_pseudo = $bdd->exec('UPDATE membres SET pseudo = \'' . $nouveau_pseudo . '\' WHERE id = \'' . $_SESSION['id'] . '\'');
	}

if ($nouveau_mail)
	{
		$modif_mail = $bdd->exec('UPDATE membres SET email = \'' . $nouveau_mail . '\' WHERE id = \'' . $_SESSION['id'] . '\'');
	}




if ($modif_pass || $modif_pseudo || $modif_mail)
	{
		Header('Location:../Vue/modifier_profil.php?modif_ok=1');
	}

