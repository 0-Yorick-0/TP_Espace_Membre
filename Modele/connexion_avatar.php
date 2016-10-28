<?php

$req = $bdd->query('SELECT id FROM membres WHERE pseudo = \'' . $_SESSION['pseudo'] . '\'');

$resultat = $req->fetch();

//$resultat->closeCursor();

?>