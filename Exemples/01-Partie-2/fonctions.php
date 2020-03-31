<?php
//Initialisation d'une string
$phrase = 'Bonjour je suis une phrase';
//Stockage du nombre de caracteres de la phrase
$nbr_char = strlen($phrase);
//Melange des caracteres de la phrase
$shuffled_phrase = str_shuffle($phrase);
//Affichage du nombre de caracteres de la phrase
echo '<p>Il y a '.$nbr_char.' caracteres dans cette phrase</p>';
//Affichage de la phrase avec les caracteres melanges
echo '<p>Nouvelle phrase : '.$shuffled_phrase.'</p>';
//Affichage de la date
echo '<p>'.date('d/m/y').'</p>';
//Creation d'une fonction
function direBonjour($name){
    echo '<p>Bonjour '.$name.'</p>';
}
direBonjour('Aurelien');
direBonjour('Michel');
direBonjour('Marie');
?>