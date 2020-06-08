/*
Il faut appeler  session_start() sur chacune des pages AVANT d'écrire le moindre code HTML (avant même la balise  <!DOCTYPE> ;). Si on oublie de lancer session_start(), vous ne pourrez pas accéder aux variables superglobales  $_SESSION .
*/


<?php
session_start();
?>

<pre>

<?php

/*
$_SERVER: ce sont des valeurs renvoyées par le serveur. Elles sont nombreuses et quelques-unes d'entre elles peuvent nous être d'une grande utilité. Je vous propose de retenir au moins$_SERVER['REMOTE_ADDR']. Elle nous donne l'adresse IP du client qui a demandé à voir la page, ce qui peut être utile pour l'identifier.
*/
echo "<br>". '$_SERVER = '; print_r($_SERVER);

echo "<br> Remote adresse" . ($_SERVER['REMOTE_ADDR']) . "<br>";
/*
$_ENV : ce sont des variables d'environnement toujours données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour notre site web.
*/
echo "<br>". '$_ENV = '; print_r($_ENV);
/*
$_SESSION on y retrouve les variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d'un visiteur. 
*/
echo "<br>". '$_SESSION = '; print_r($_SESSION) . "<br>";

//session_id — Lit et/ou modifie l'identifiant courant de session
echo "<br>  session_id()"; 

/*
session_destroy()  : ferme la session du visiteur. Cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes (c'est le timeout), mais vous pouvez aussi créer une page « Déconnexion » si le visiteur souhaite se déconnecter manuellement.


$_COOKIE : contient les valeurs des cookies enregistrés sur l'ordinateur du visiteur. Cela nous permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.
*/
echo "<br>". '$_COOKIE = '; print_r($_COOKIE);
/*
$_FILES : elle contient la liste des fichiers qui ont été envoyés via le formulaire précédent.
*/
echo "<br>" . '$_FILES ='; print_r($_FILES);
?>
</pre>