<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  	<p>
		<?php

    if ( $_POST['frites']  == 'oui' ) 
    {
      echo "Tu aimes les Frites ! ";
    } 
    elseif ( $_POST['frites']  == 'non' )
    {
      echo "Tu n'aimes pas les Frites ! ";
    }
    else
    {
      echo "Tu ne sais pas ! ";
    }

    ?>
  </p>

<p> <a href="formulaire_bouton_option.php">clique ici</a> pour revenir à la page formulaire_bouton_option.php.</p>
  

  </body>
</html>