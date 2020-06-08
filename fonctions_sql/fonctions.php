<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			tr,td
			{
    		border: 2px solid blue;text-align: center;
   			background-color:#49CB63; 	
			}	
		</style> 
	</head>
</html>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if (isset($_GET['fonction']))
{  

echo $_GET['fonction'] . "<br>";

switch ($_GET['fonction'])
{
    
    case 'UPPER':
	    $requete='SELECT UPPER(nom) AS nom_maj, possesseur, prix FROM jeux_video'; 
      	break;

    case 'LOWER':
	    $requete='SELECT LOWER(nom) AS nom_maj, possesseur, prix FROM jeux_video'; 
      	break;

    case 'LENGHT':
      	$requete='SELECT nom, LENGTH(nom) AS longueur_nom FROM jeux_video';
      	break;

    case 'ROUND':
		$requete='SELECT prix, ROUND(prix, 2) AS prix_arrondi FROM jeux_video';
      	break;

    case 'AVG':
    	$requete='SELECT AVG(prix) AS prix_moyen FROM jeux_video';
      	break;

    case 'SUM':
        $requete='SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur=\'Patrick\'';
      	break;

    case 'MAX':
        $requete='SELECT MAX(prix) AS prix_max FROM jeux_video';
      	break;

    case 'MIN':
        $requete='SELECT MIN(prix) AS prix_min FROM jeux_video';
      	break;
    
    case 'COUNT':
        $requete='SELECT COUNT(nbre_joueurs_max) AS nbjeux FROM jeux_video';
      	break;

    case 'COUNT_DISTINCT':
 		$requete='SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video';
      	break;
    
    case 'GROUP_BY':
 		$requete='SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console';
      	break;
    
    case 'HAVING':
 		$requete='SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10';
      	break;
    
    default:
        echo "<BR>Désolé, cette fonction n'est pas définie ! <BR>" . "<BR>Valeurs possibles: UPPER, LOWER, LENGHT, ROUND, AVG, SUM, MAX, MIN, COUNT, COUNT_DISTINCT, GROUP_BY, HAVING";
}

 		include("fonctions_exec.php"); 

}
else
{

	echo "Renseignez la variable \"fonction\", valeurs possibles: UPPER, LOWER, LENGHT, ROUND, AVG, SUM, MAX, MIN, COUNT, COUNT_DISTINCT, GROUP_BY, HAVING";
}
?>