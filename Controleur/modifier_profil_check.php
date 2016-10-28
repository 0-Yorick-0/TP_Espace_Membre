<?php

session_start();

if(isset($_POST['nouveau_pseudo'])
	AND !empty($_POST['nouveau_pseudo']))
	{
		
		if (preg_match('#^[\w\s-$]#i', $_POST['nouveau_pseudo'])) //On vérifie que le pseudo utilise bien les caractères autorisés
		{
			if (strlen($_POST['pseudo']) <= 15) // On vérifie que le pseudo fasse moins de 16 caractères
			{
				$nouveau_pseudo = htmlspecialchars($_POST['nouveau_pseudo']);
			}
			else
			{
				echo 'Merci de renseigner un pseudo de 15 caractères maximum<br />';
				echo '<a href="../Vue/modifier_profil.php">Modifier mon profil</a>';
			}
		}
		else
		{
			echo 'Merci d\'utiliser les caractères autorisés';
			echo '<a href="../Vue/modifier_profil.php">Modifier mon profil</a>';
		}
	}


if(isset($_POST['nouveau_pass'])
	AND !empty($_POST['nouveau_pass']))
	{
		if (preg_match('#^[\w\s-$]#i', $_POST['nouveau_pass'])) // On vérifie que le pass utilise les caractères autorisés
		{
			if (strlen($_POST['nouveau_pass']) <= 20)
			{
				if ($_POST['nouveau_pass'] == $_POST['confirm_nouveau_pass'])
					{
						$nouveau_pass = sha1(htmlspecialchars($_POST['nouveau_pass']));
					}
			}
			else
			{
				echo 'Merci de renseigner un mot de passe de 20 caractères maximum<br />';
				echo '<a href="../Vue/modifier_profil.php">Modifier mon profil</a>';
			}
		}
		else
		{
			echo 'Merci d\'utiliser les caractères autorisés';
			echo '<a href="../Vue/modifier_profil.php">Modifier mon profil</a>';
		}
	}

if (isset($_POST['nouveau_mail'])
		AND (!empty($_POST['nouveau_mail'])))
		{
			if (preg_match('#^[\w.-]+@[\w.-]{2,}\.[a-z]{2,4}$#i', $_POST['nouveau_mail']))
				{
					$nouveau_mail = $_POST['nouveau_mail'];
				}
			else
				{
					echo 'Merci de renseigner une adresse email valide<br />';
					echo '<a href="../Vue/modifier_profil.php">Modifier mon profil</a>';
				}
		}

//Header('Location:../Vue/modifier_profil.php?pseudoOK=1'); //permet de verifier que tout marche