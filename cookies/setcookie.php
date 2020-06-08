/*
Pour écrire un cookie, on utilise la fonction PHP  setcookie  


On lui donne en général trois paramètres, dans l'ordre suivant :

	le nom du cookie (ex. :  pseudo ) ;

	la valeur du cookie (ex. :  M@teo21 ) ;

	la date d'expiration du cookie, sous forme de timestamp (ex. :  1090521508 ).


le timestamp est le nombre de secondes écoulées depuis le 1er janvier 1970

L'option  httpOnly sur le cookie rendra le cookie inaccessible en JavaScript sur tous les navigateurs qui supportent cette option (c'est le cas de tous les navigateurs récents.).
Cette option permet de réduire drastiquement les risques de faille XSS sur votre site, au cas où vous on ait oublié d'utiliser htmlspecialchars.

Le dernier paramètre "true" active l'option httpOnly.	

Les paramètres du milieu sont des paramètres que nous n'utilisons pas, on leur donne donnc la valeur null .

Attention !

Comme pour session_start, cette fonction ne marche QUE si on l'appelle avant tout code HTML (donc avant la balise <!DOCTYPE>


*/
<?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); ?>