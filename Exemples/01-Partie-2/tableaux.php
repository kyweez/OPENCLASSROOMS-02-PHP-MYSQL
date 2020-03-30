<?php
    //Creation de tableaux case par case
    $prenoms[0] = 'Aurelien';
    $prenoms[1] = 'Marie';
    $prenoms[2] = 'Robert';
    $prenoms[3] = 'Matthieu';

    //Creation d'un tableau en une ligne
    $prenom_array = array('Aurelien', 'Marie', 'Robert', 'Matthieu');

    //Affichage d'une case d'un tableau
    echo '<p>'.$prenoms[0].'</p>';
    echo '<p>'.$prenom_array[2].'</p>';

    //Afficahge de tout le tableau
    echo '<p>'.print_r($prenom_array).'</p>';

    //Creation et affichage d'un tableau associatif
    $personne = array('nom'=> 'Boudier', 'prenom' =>'Aurelien', 'age' => '31');
    echo '<p>'.print_r($personne).'</p>';

    //Parcours d'un tableau avec une boucle for
    for($i = 0; $i < 4; $i++){
        echo '<p>'.$prenoms[$i].'</p>';
    }

    //Parcours d'un tableauc avec un foreach
    foreach ($personne as $key=>$value){
        echo '<p>'.$key.' : '.$value.'<p>';
    }

?>