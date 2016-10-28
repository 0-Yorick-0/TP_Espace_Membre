<?php 
    		
	if(
		!empty($_POST['pseudo']) // On vérifie l'existence des variables du formulaire
		AND !empty($_POST['pass1']) 
		AND !empty($_POST['pass2']) 
		AND !empty($_POST['email'])
		
		AND $_POST['pass1'] == $_POST['pass2'] // On vérifie que le mot de passe ait bien été confirmé

		AND preg_match('#^[\w\s-$]#i', $_POST['pseudo']) //On vérifie que le pseudo utilise bien les caractères autorisés
		AND strlen($_POST['pseudo']) <= 15 // On vérifie que le pseudo fasse moins de 16 caractères

		AND preg_match('#^[\w.-]+@[\w.-]{2,}\.[a-z]{2,4}$#i', $_POST['email'])// On vérifie que l'adresse mail est valide
		) 
	{
		$pass_hache = sha1(htmlspecialchars($_POST['pass1']));
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$email = htmlspecialchars($_POST['email']);
		
	}
?>