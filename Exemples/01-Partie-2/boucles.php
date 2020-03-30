<?php
    
    $repetitions = 0;

    while ($repetitions < 10){
        echo '<p>'.$repetitions.'. Je ne dois pas copier sur mon voisin.</p>';
        $repetitions++;
    }

    for ($i = 0; $i < 10 ; $i++){
        echo '<p>'.$i.'. Si je peux copier mdr.</p>';
    }

?>