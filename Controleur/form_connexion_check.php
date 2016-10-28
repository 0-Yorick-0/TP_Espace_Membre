<?php 
    		
	if(
		!empty($_POST['pseudo']) // On vérifie l'existence des variables du formulaire
		AND !empty($_POST['pass'])

		) 
	{
		$pass_hache = sha1(htmlspecialchars($_POST['pass']));
		$pseudo = htmlspecialchars($_POST['pseudo']);		
	}
?>