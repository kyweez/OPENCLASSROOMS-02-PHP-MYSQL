<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Bonjour</title>
</head>

<body>
    <p>
        <?php
        //Determine if those 3 variables are declared and different than NULL
        if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter']))
        {
            if (!empty($_GET['nom']) AND !empty($_GET['prenom']) AND !empty($_GET['repeter']))
            {
                $repetition_number = (int)$_GET['repeter'];
                if ($repetition_number <= 0)
                    echo 'La valeur de repetition n\'est pas initilisee (ou mal)...';
                else if ($repetition_number < 100)
                {
                    for ($i=0; $i<$repetition_number; $i++)
                        echo '<p>'.($i+1).' - Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'].'</p>';
                }
                else
                    echo 'Nombre de repetions trop élevé...';
            }
            else
            {
                echo 'Au moins un des cles n\'a pas de valeur associee';
            }
        }
        else
            echo 'Pas de nom ou de prenom defini...';
        ?>
    </p>
</body>

</html>