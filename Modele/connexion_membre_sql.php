<?php
include_once('../Controleur/form_connexion_check.php'); //on inclut la page qui controle les informations rentrées par l'utilisateur


include_once('../Modele/connexion_sql.php');// connexion à la bdd

$req = $bdd->prepare('SELECT id, pseudo, pass, email FROM membres WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
	'pseudo' => $pseudo,
	'pass' => $pass_hache,
	 ));


$resultat = $req->fetch(); //on parcours la bdd à la recherche d'un resultat qui matche.

if(!$resultat)
{
	header('Location:../Vue/form_connexion.php?wrong=1');
}else{
	session_start(); // si le resultat existe, on démarre la session.
	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['id'] = $resultat['id'];
	$_SESSION['email'] = $resultat['email'];
	include_once('../create_cookie.php'); // Si connexion auto, on crée des cookies
	header('Location:../accueil.php');
}


?>