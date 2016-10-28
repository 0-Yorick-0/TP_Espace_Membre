<?php

if(isset($_POST['connexion_auto']))
{
setcookie('pseudo_TP_espace_membre', $pseudo, time() + 365*24*3600, '/', 'localhost', false, true);
setcookie('pass_TP_espace_membre', $pass_hache, time() + 365*24*3600, '/', 'localhost', false, true);
setcookie('co_auto_TP_espace_membre', true, time() + 365*24*3600, '/', 'localhost', false, true);
}

?>