<?php
//Fonction de calcul de volume de cone
function volume_cone($rayon, $hauteur)
{
   return (($rayon * $rayon * pi() * $hauteur)/3); // calcul du volume et renvoi de la valeur
}
$rayon = 3;
$hauteur = 1;
//Affichage du resultat
echo 'Le volume d\'un cône de rayon '.$rayon.' et de hauteur '.$hauteur.' est de '.volume_cone($rayon, $hauteur);
?>