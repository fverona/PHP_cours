<?php
// On crée notre array $coordonnees
$coordonnees = array ('prenom' => 'François', 'nom' => 'Dupont', 'adresse' => '3 Rue du Paradis', 'ville' => 'Marseille');
?>

<?php
$coordonnees['prenom'] = 'François';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Marseille';
?>

<?php
echo $coordonnees['ville'];
?>