<?php
$autorisation_entrer = true;

if ($autorisation_entrer == true)
{
    echo "Bienvenue petit nouveau. :o)";
}
elseif ($autorisation_entrer == false)
{
    echo "T'as pas le droit d'entrer !";
}
?>

<?php
$autorisation_entrer = true;

if ($autorisation_entrer)
{
    echo "Bienvenue petit nouveau. :o)";
}
else
{
    echo "T'as pas le droit d'entrer !";
}
?>

<?php
$autorisation_entrer = true;

if (! $autorisation_entrer)
{

}
?>