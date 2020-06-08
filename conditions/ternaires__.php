/* Un ternaire est une condition condensée qui fait deux choses sur une seule ligne :

on teste la valeur d'une variable dans une condition ;

on affecte une valeur à une variable selon que la condition est vraie ou non.

Prenons cet exemple à base deif… elsequi met un booléen$majeurà vrai ou faux selon l'âge du visiteur :
*/

<?php
$age = 24;

if ($age >= 18)
{
    $majeur = true;
}
else
{
    $majeur = false;
}
?>

// On peut faire la même chose en une seule ligne grâce à une structure ternaire :

<?php
$age = 24;

$majeur = ($age >= 18) ? true : false;
?>