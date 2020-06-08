<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
</html>

<?php
/*
===================================
   Connexion à la base "basedates
===================================
*/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=basedates;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
/*
===========================================================================
   Insert de la dete et heure courante dans les différents types de champs
===========================================================================
*/

$req = $bdd->prepare('INSERT INTO tabdate(FDATE, FDATETIME, FTIME, FTIMESTAMP, FYEAR) VALUES( NOW(), NOW(), NOW(), NOW(), :fyear )');

$req->execute (array('fyear' => date("Y") ));


/*
===============================================
   Récupération du nombre de ligne de la table
===============================================
*/
$req = $bdd->prepare('SELECT count(*) from tabdate');

$req->execute(array());

$NBLIGS = $req->fetch();

$DEP=($NBLIGS[0] - 10);



/*
==================================================================================
  Récupértion du JOUR, MOIS, ANNEE, HOUR, MINUTE, SECONDS avec des fonctions SQL
==================================================================================
*/
$req = $bdd->prepare("SELECT DAY(FDATETIME) as jour, MONTH(FDATETIME) as mois, YEAR(FDATETIME) as annee, HOUR(FDATETIME) as heure, MINUTE(FDATETIME) as min, SECOND(FDATETIME) as secs  from tabdate limit $DEP, $NBLIGS[0]");

$req->execute(array());

?>

		<table>

			<th>Jour</th><th>Mois</th><th>Annee</th><th>heure</th><th>min</th><th>sec</th>

			<?php while ($donnees = $req->fetch())
			{
			echo "<tr><td>" . $donnees['jour'] . "</td><td>" . $donnees['mois'] . "</td><td>" . $donnees['annee'] . "</td><td>" . $donnees['heure'] . "</td><td>" . $donnees['min'] . "</td><td>" . $donnees['secs'] . "</td></tr>";
			}?>

		</table>


<?php 	$req->closeCursor(); 

/*
=======================================================================
  Récupértion d'une date et mise en forme avec la fonction DATE_FORMAT
=======================================================================
*/

$req = $bdd->prepare("SELECT DATE_FORMAT(FDATETIME, '%d-%m-%Y %hh%m:%s') AS datejour FROM tabdate where FDATE = '2020-01-29'");

$req->execute(array());

$donnees = $req->fetch();

echo "<br> date " . $donnees['datejour'];

$req->closeCursor(); 

/*
============================
  Utilistation du DATE_ADD 
============================
*/
$req = $bdd->prepare("SELECT DATE_ADD(FDATE, INTERVAL 15 DAY) AS date_expiration, FDATE FROM tabdate where FDATE = '2020-01-29'");

$req->execute(array());

$donnees = $req->fetch();

echo "<br> date expiration ( DATE_ADD + 15 jours ) :" . $donnees['FDATE'] . " ==>  ". $donnees['date_expiration'] . "<BR>";

$req->closeCursor(); 


$req->closeCursor();$req = $bdd->prepare("SELECT DATE_ADD(FDATE, INTERVAL 2 MONTH) AS date_expiration, FDATE FROM tabdate where FDATE = '2020-01-29'");

$req->execute(array());

$donnees = $req->fetch();

echo "<br> date expiration ( DATE_ADD  +  2 mois )  :" . $donnees['FDATE'] . " ==>  ". $donnees['date_expiration'] ;

$req->closeCursor(); 

?>