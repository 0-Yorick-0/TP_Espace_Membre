<?php

session_start();


	if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) // on teste si le fichier a bien été envoyé et s'il n'y a pas d'erreurs
	{
		if($_FILES['monfichier']['size'] <= 8000000) //on vérifie que le fichier est inférieur à 8 Mo
		{

			$infosfichier = pathinfo($_FILES['monfichier']['name']); // la fonction pathinfo renvoie diverses infos sur le fichier sous forme d'un array
			$extension_upload = $infosfichier['extension']; // on récupère l'extension du fichier

			$extension_upload = strtolower($extension_upload); //on convertit l'extension récupérée en lettres minuscules

			$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png'); // on crée un array qui contient les extensions autorisées
						

			if(in_array($extension_upload, $extensions_autorisees)) // in_array vérifie que le premier paramètre est contenu dans le deuxième
			{
				$nom_final = basename($_FILES['monfichier']['name']); //basename permet d'extraire le nom du fichier de $_FILES, afin de conserver son nom d'origine
				move_uploaded_file($_FILES['monfichier']['tmp_name'], '../uploads/img/originaux/' . $nom_final .'');// on enregistre enfin le fichier, contenu jusqu'ici dans "$_FILES['monfichier']['tmp_name']", avec comme paramètre supplémentaire le chemin vers où l'on souhaite l'enregistrer
				echo '<p><strong>L\'envoi a bien été effectué</strong></p>';
				

			}else
			{
				echo 'Merci d\'envoyer un fichier au format jpg, jpeg ou png.';
			}
			
		}
		
	}
	
include('../Modele/connexion_sql.php');
include('../Modele/connexion_avatar.php');


if($extension_upload == 'jpg' OR $extension_upload == 'jpeg')
	{
		include('../controleur/redimensionner_img_jpg.php');
	}
	else
	{
		include('../controleur/redimensionner_img_png.php');
	}

	echo '<a href="../Vue/modifier_profil.php">Modifier mon profil</a><br />';
	echo '<a href="../accueil.php">Retour à l\'accueil</a>';

?>