<?php
	session_start(); //ouverture de la session, nécessaire pour la fermer

	$_SESSION = array(); // Supression des variables de session

	session_destroy();
	

	setcookie('pseudo_TP_espace_membre', '', 0, '/', 'localhost', false, true);
	setcookie('pass_TP_espace_membre', '', 0, '/', 'localhost', false, true);

	unset($_COOKIE['pseudo_TP_espace_membre']);
	unset($_COOKIE['pass_TP_espace_membre']);


	
	header('Location:../accueil.php');
?>