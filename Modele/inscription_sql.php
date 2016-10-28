<?php

include_once('../Controleur/form_inscr_check.php');
include_once('../Modele/connexion_sql.php');


$req = $bdd->query('SELECT pseudo, email FROM membres WHERE pseudo = \'' . $pseudo . '\'');
$count = $req->rowCount(); //rowCount renvoie le nombre de fois que le pseudo a été trouvé


if ($count == 0)
{
	$req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription) 
					  VALUES(:pseudo, :pass, :email, NOW())'); // insertion des données
$req->execute(array(
	':pseudo' => $pseudo,
	':pass' => $pass_hache,
	':email' => $email
	));
$req->closeCursor();



}else{
	echo 'Le pseudo est déjà pris';
	echo '<a href="../accueil.php>Revenir à l\'accueil</a>';
}


header('Location:../accueil.php');




?>