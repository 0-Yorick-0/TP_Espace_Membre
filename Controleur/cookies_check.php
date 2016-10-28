<?php


if(isset($_COOKIE['pseudo_TP_espace_membre']) 
	AND !empty($_COOKIE['pseudo_TP_espace_membre'])
	AND isset($_COOKIE['co_auto_TP_espace_membre'])
	AND $_COOKIE['co_auto_TP_espace_membre'] == 1
	)
	{
		include('Modele/connexion_sql.php');// connexion à la bdd

		$req = $bdd->prepare('SELECT id, pseudo, pass FROM membres WHERE pseudo = :pseudo AND pass = :pass');
		$req->execute(array(
			'pseudo' => $_COOKIE['pseudo_TP_espace_membre'],
			'pass' => $_COOKIE['pass_TP_espace_membre'],
			));
		$resultat = $req->fetch();
	}

			if($resultat)
			{
				session_start();
				$_SESSION['pseudo'] = $_COOKIE['pseudo_TP_espace_membre'];
				$_SESSION['id'] = $resultat['id'];
				//echo $_SESSION['pseudo']; // permet de tester que tout à fonctionné, et sera retiré dans la version finale				
			}


?>