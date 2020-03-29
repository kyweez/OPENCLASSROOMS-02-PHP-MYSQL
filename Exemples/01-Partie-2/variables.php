<?php
    //Variable numerique
    $ageDuVisiteur = 20;
    $ageDuVisiteur = 30;//Redifinition de la valeur de l'age
    echo "Le visiteur a $ageDuVisiteur ans."; //Pas trop utilise par les developpeurs PHP
    echo "<br>";
    echo 'Le visiteur a $ageDuVisiteur ans.'; //Les simples quotes ne tiennent pas compte de la variable
    echo "<br>";
    echo 'Le visiteur a '.$ageDuVisiteur.' ans.'; //Les simples quotes ne tiennent pas compte de la variable
    echo "<br>";

    //Variable numerique decimale
    $prix = 25.25;
    echo $prix;
    echo "<br>";

    //Variable texte
    $message = "Bonjour";
    echo $message;
    echo "<br>";

    //Variable booleen
    $isFalse = false;
    $isTrue = true;
    echo $isFalse; //N'affiche rien
    echo $isTrue;
    echo "<br>";

    //Tests de calculs
    $prix = 2.4;
    echo 'Le prix vaut '.$prix.' euros <br>';
    $quantite = 123;
    echo 'La quantite vaut '.$quantite.'<br>';
    echo 'Le prix total vaut donc '.$prix*$quantite;
?>