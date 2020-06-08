<?php

if (isset($requete))
{  

$req = $bdd->prepare($requete);

$req->execute(array());
		
while ($donnees = $req->fetch())
{?>
 <table>

  <?php	
  
  switch ($_GET['fonction'] ) 
  { 
   
   case "UPPER":

      echo "<tr><td>".  $donnees['nom_maj'] . "</td><td>" . $donnees['possesseur'] . "</td><td>" . $donnees['prix'] . "</td></tr><br>"; 

      break;  

   case "LOWER":

      echo "<tr><td>".  $donnees['nom_maj'] . "</td><td>" . $donnees['possesseur'] . "</td><td>" . $donnees['prix'] ."</td></tr><br>"; 

      break;

    case 'LENGTH':

      echo "<tr><td>".  $donnees['nom'] . "</td><td>" . $donnees['longueur_nom'] . "</td></tr><br>"; 
      
      break;
    
    case 'ROUND':

      echo "<tr><td>".  $donnees['prix'] . "</td><td>" .  $donnees['prix_arrondi'] . "</td></tr><br>"; 

      break;

   case 'AVG':

      echo "<tr><td> Prix moyen: ".  "</td><td>" .$donnees['prix_moyen'] . "</td></tr><br>"; 

      break;

  case 'SUM':

      echo "<tr><td> prix_total: ".  "</td><td>" .$donnees['prix_total'] . "</td></tr><br>"; 

      break;

  case 'MAX':

      echo "<tr><td> prix_max: ".  "</td><td>" .$donnees['prix_max'] . "</td></tr><br>"; 

      break;

  case 'MIN':

      echo "<tr><td> prix_min: " .  "</td><td>" . $donnees['prix_min'] . "</td></tr><br>"; 

      break;

  case 'COUNT':

      echo "<tr><td> Lignes contenant le nombre de joueurs max: " .  "</td><td>" . $donnees['nbjeux'] . "</td></tr><br>"; 

      break;

  case 'COUNT_DISTINCT':

      echo "<tr><td> Nombre de possesseurs des jeux: " .  "</td><td>" . $donnees['nbpossesseurs'] . "</td></tr><br>"; 

      break;
 
  case 'GROUP_BY':

      echo "<tr><td> Prix moyen par console: " .  "</td><td>" . $donnees['prix_moyen'] . "</td></tr><br>"; 

      break;
 
  case 'HAVING':

      echo "<tr><td> Consoles avex prix moyen/jeux <= 10: "."</td><td>".$donnees['console']."</td><td>".$donnees['prix_moyen']."</td></tr><br>"; 

      break;
  
   default:

      echo $_GET['fonction'] . " - Désolé, cette fonction n'est pas définie";
  
  }?>

 </table>

 <?php
} 

$req->closeCursor();

}