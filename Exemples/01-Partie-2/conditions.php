<?php

    //Conditions if/else avec des nombres
    $age = 14;
    if ($age < 12){
        echo 'Salut gamin !<br>';
    }
    else if ($age == 14){
        echo 'Tu as '.$age.' ans<br>';
    }
    else
        echo 'Salut Papy<br>';
    
    //Conditions if/else avec des booleens
    $adult = true;
    if ($adult)
        echo 'Tu es un adulte !<br>';
    else
        echo 'Tu es un enfant !<br>';

    //Test avec booleen et string
    $name = 'bernard';
    if ($adult && $name == 'bernard')
        echo 'Tu es un adult et tu t\'appelles '.$name.'<br>';
    else
        echo 'Tu es un enfant, ou bien tu ne t\'appelles pas '.$name.'<br>';

    //Test d'incorporation de code html dans un if php
    $test = true;
    if ($test){
        ?>
        <div style="height: 200px; width: 300px; background-color: green;"> TEST DE DIV DEPUIS LE PHP</div>
        <?php
    }

    //Test switch
    $number = 11;

    switch($number){
        case 10:
            echo 'Ca marche pas';
        break;
        case 12:
            echo 'Ca marche';
            break;
        case 14:
            echo 'La non plus ca ne marche pas';
            break;
        default:
            echo 'Valeur du case par defaut';
    }
?>