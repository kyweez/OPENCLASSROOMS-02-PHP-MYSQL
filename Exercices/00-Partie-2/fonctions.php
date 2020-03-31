<?php
//strlen
echo '<h1>Exercice sur les fonctions</h1><p style="background-color:rgb(253, 239, 225);"><h2 style="color:blue";>strlen : <a target="_blank" href="https://www.php.net/manual/fr/function.strlen.php">Plus d\'infos</a></h2>';
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
echo '</p>';

//str_replace
echo '<p style="background-color:rgb(253, 239, 225);"><h2 style="color:blue";>str_replace : <a target="_blank" href="https://www.php.net/manual/fr/function.str-replace.php">Plus d\'infos</a></h2>';
$ma_variable = str_replace('b', 'p', 'bim bam boum');
echo $ma_variable;
echo '</p>';

//str_shuffle
echo '<p style="background-color:rgb(253, 239, 225);"><h2 style="color:blue";>str_shuffle : <a target="_blank" href="https://www.php.net/manual/fr/function.str-shuffle.php">Plus d\'infos</a></h2>';
$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);
echo $chaine;
echo '</p>';

//strtoupper
echo '<p style="background-color:rgb(253, 239, 225);"><h2 style="color:blue";>strtoupper : <a target="_blank" href="https://www.php.net/manual/fr/function.strtoupper.php">Plus d\'infos</a></h2>';
$chaine_2 = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine_2 = strtolower($chaine_2);
echo $chaine_2;
echo '</p>';

//date
echo '<p style="background-color:rgb(253, 239, 225);"><h2 style="color:blue";>date : <a target="_blank" href="https://www.php.net/manual/fr/function.date.php">Plus d\'infos</a></h2>';
// Enregistrons les informations de date dans des variables
$jour = date('d');
$mois = date('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');
// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute;
echo '</p>';
?>