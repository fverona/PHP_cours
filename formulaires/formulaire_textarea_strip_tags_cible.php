<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  	
<p>Bonjour !</p>

<p>Ici le texte que t'as tapé: <?php echo strip_tags($_POST['message']); ?> </p>
<!-- <p>La fonction htmlspecialchars evite l'insertion de codes HTML ou javascript dans le formulaire </p>-->
<p>Si tu veux changer de texte, <a href="formulaire_textarea_strip_tags.php">clique ici</a> pour revenir à la page formulaire_textarea_strip_tag.php.</p>


  	</p>
  </body>
</html>