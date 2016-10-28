<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="vue/blog/commentaire.css" rel="stylesheet" /> 
    </head>
        
    <body>

    	<form method="post" action="../Modele/connexion_membre_sql.php">
    		<label for="pseudo">Votre Pseudo :</label><br /><input type="text" name="pseudo" id="pseudo" required/><br />
    		<label for="pass">Votre Mot de Passe :</label><br /><input type="password" name="pass" id="pass" required /><br />
    		<label for="connexion_auto">Connexion Automatique</label><input type="checkbox" name="connexion_auto" id="connexion_auto" /><br />
    		<input type="submit" name="Envoyer" /><br />

    	</form>

        <?php if(isset($_GET['wrong']) AND !empty($_GET['wrong']))
        {
            echo '<strong>Mauvais mot de passe ou identifiant</strong>';
        }
        ?>
    </body>

</html>