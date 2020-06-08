<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
   		<form action="formulaire_envoi_fichier_cible.php" method="post" enctype="multipart/form-data">
	   		<!--  Pour proposer d'envoyer un un fichier dans le formulaire, il faut ajouter l'attributenctype="multipart/form-data" -->
	        <p>
	                <p>Formulaire d'envoi de fichier :<br /></p>

	                <input type="file" name="monfichier" /><br />
	                
	                <p>
	                	<input type="submit" value="Envoyer le fichier" />
	                </p>	
	        </p>
        
		</form>
   </body>
   </html>