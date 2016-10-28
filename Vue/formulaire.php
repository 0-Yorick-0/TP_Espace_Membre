<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="vue/blog/commentaire.css" rel="stylesheet" /> 
    </head>
        
    <body>

    	<form method="post" action="../Modele/inscription_sql.php">
    		<label for="pseudo">Votre Pseudo :</label><br /><input type="text" name="pseudo" id="pseudo" required/><br />
    		<label for="pass1">Votre Mot de Passe :</label><br /><input type="password" name="pass1" id="pass1" required /><br />
    		<label for="pass2">Confirmez votre Mot de Passe :</label><br /><input type="password" name="pass2" id="pass2" required /><br />
    		<label for="email">Votre Adresse Mail :</label><br /><input type="text" name="email" id="email" required /><br />
    		<input type="submit" name="Envoyer" />

    	</form>

    </body>

</html>