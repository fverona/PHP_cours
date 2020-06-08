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

	<form action="formulaire_checkbox_cible.php" method="post">
		<p>
			<input type="checkbox" name="frites" id="frites" /> <label for="frites">Patates frites</label><br>	
			<input type="checkbox" name="pates" id="pates" /> <label for="pates">Pâtes</label><br>			
			<input type="checkbox" name="poulet" checked="checked" id="poulet" /> <label for="Poulet">Poulet</label><br>			
			<input type="checkbox" name="steak" id="steak" /> <label for="steak">Steak</label><br>			
			<input type="checkbox" name="poisson" id="poisson" /> <label for="poisson">Poisson</label><br>
			
		</p>	
		<p>
			<input type="submit" value="Valider" /> 
		</p>
			
	</form>		
		
	</body>
</html>
