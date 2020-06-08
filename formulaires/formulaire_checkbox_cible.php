<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  	
<p>Bonjour !</p>

		<span>Tu as choisi:</span> <?php if ( isset($_POST['frites'])  AND $_POST['frites']  == 'on' ) {echo "Frites ";} 
		                                 if ( isset($_POST['poulet'])  AND $_POST['poulet']  == 'on' ) {echo "Poulet ";}
		                                 if ( isset($_POST['pates'])   AND $_POST['pates']   == 'on' ) {echo "Pâtes ";}
		                                 if ( isset($_POST['steak'])   AND $_POST['steak']   == 'on' ) {echo "Steak ";}
		                                 if ( isset($_POST['poisson']) AND $_POST['poisson'] == 'on' ) {echo "Poisson ";}
		                            ?> 
<p>Si tu veux changer de menu, <a href="formulaire_checkbox.php">clique ici</a> pour revenir à la page formulaire_checkbox.php.</p>
  

  </body>
</html>