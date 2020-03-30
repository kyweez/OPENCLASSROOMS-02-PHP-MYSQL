<?php
//Test de la fonction array_key_exists
echo '<a style="text-decoration:none; color:blue; font-weight:bold;" href="https://www.php.net/manual/fr/function.array-key-exists.php">Lien pour expliquer la fonction array_key_exists</a><br>';
$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);

if (array_key_exists('nom', $coordonnees)) //array_key_exists ( mixed $key , array $array ) : bool
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

//Test de la fonction in_array
echo '<br><br><a style="text-decoration:none; color:blue; font-weight:bold;" href="https://www.php.net/manual/fr/function.in-array.php">Lien pour expliquer la fonction in_array</a><br>';
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits)) 
/*  array ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : bool
    needle = La valeur recherchee (aiguille)
    haystack = Le Tableau (meule de foin)
    strict compare aussi le type si il est mis a TRUE
*/
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}

//Test de la fonction in_array
echo '<br><br><a style="text-decoration:none; color:blue; font-weight:bold;" href="https://www.php.net/manual/fr/function.array-search.php">Lien pour expliquer la fonction array_search</a><br>';

$fruits_2 = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits_2);
/*  array_search ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : mixed
    needle = La valeur recherchee (aiguille)
    haystack = Le Tableau (meule de foin)
    strict compare aussi le type si il est mis a TRUE
*/
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits_2);
echo '"Banane" se trouve en position ' . $position;

?>