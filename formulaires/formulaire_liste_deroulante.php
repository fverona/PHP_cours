<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  	<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
	</p>

	<form action="formulaire_liste_deroulante_cible.php" method="post">
		<p>
			<select name="ville">

		    <option value="Paris">Paris</option>
		    <option value="Bordeaux">Bordeaux</option>
		    <option value="Marseille"selected="selected" >Marseille </option>  <! -- Option pr défaut -->
		    <option value="Lyon">Lyon</option>
		    <option value="Lille">Lille</option>
		    <option value="Metz">Metz</option>
		    <option value="Rouen">Rouen</option>

			</select>
			
			<p>
				<input type="submit" value="Valider" /> 
			</p>

		</p>		    
	</form>		
		
	</body>
</html>
