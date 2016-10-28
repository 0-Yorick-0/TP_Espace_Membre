<?php 
error_reporting(E_ALL);

session_start();

include('Controleur/cookies_check.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	
    </head>
        
    <body>



    	<h1>Bienvenue sur cette page</h1>

        <a href="Vue/formulaire.php">S'inscrire</a><br />
        <a href="Vue/form_connexion.php">Se connecter</a><br />
        <a href="Controleur/deconnexion.php">Se déconnecter</a><br />
        <a href="Controleur/id_test.php">Trouver mon numéro d'id</a><br />
        
    <?php 

    if (isset($_GET['memberco']) AND ($_GET['memberco'] == 0))
        {
            echo 'Vous n\'êtes pas connecté, merci de vous identifier';
        }

    if(isset($_SESSION['pseudo']))
            {
                echo '<a href="Vue/modifier_profil.php">Modifier mon profil</a><br />';
                echo '<strong>Vous êtes connecté </strong>';
                echo $_SESSION['pseudo'];
                echo $_SESSION['id'];
            }

    ?>

    </body>
</html>