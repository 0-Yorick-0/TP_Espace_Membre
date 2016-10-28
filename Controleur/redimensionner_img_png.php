<?php 



$source = imagecreatefrompng(('../uploads/img/originaux/' . $nom_final . ''));// on stocke la photo originale dans une variable

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);

if ($largeur_source < $hauteur_source) // si l'image source est au format portrait
	{
		$destination_portrait = imagecreatetruecolor(150, 200); // on crée la miniature vide pour un portrait
		$largeur_destination = imagesx($destination_portrait);
		$hauteur_destination = imagesy($destination_portrait);
		imagecopyresampled($destination_portrait, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);//on convertit l'image avec les nouvelles dimanesions
		imagepng($destination_portrait, '../uploads/img/avatars/' . $resultat['id'] . '.png'); // on stocke la nouvelle image vers le chemin souhaité
	}else
	{
		$destination_paysage = imagecreatetruecolor(200, 150); // on crée la miniature vide pour un paysage
		$largeur_destination = imagesx($destination_paysage);
		$hauteur_destination = imagesy($destination_paysage);
		imagecopyresampled($destination_paysage, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
		imagepng($destination_paysage, '../uploads/img/avatars/' . $resultat['id'] . '.png'); // on stocke la nouvelle image vers le chemin souhaité
	}









?>