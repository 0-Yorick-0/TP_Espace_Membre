<?php

session_start();

//echo $_SESSION['pseudo'];

include('../Modele/connexion_sql.php');

$req = $bdd->query('SELECT id FROM membres WHERE pseudo = \'' . $_SESSION['pseudo'] . '\'');

$reponse = $req->fetch();


if ($reponse)
	{
		echo $reponse['id'];
		echo '<a href="../accueil.php">Retour à l\'accueil</a>';
	}
else
	{
		header('Location:../accueil.php?memberco=0');
	}

?>