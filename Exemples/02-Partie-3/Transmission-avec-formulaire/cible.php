<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cible</title>
</head>
<body>
    <?php 
        if (isset($_POST['vegetarien']))
            //htmlspecialchars evite les failles XSS (injection de code html  ou JS)
            echo '<p>Bonjour '.htmlspecialchars($_POST['prenom']).', vous etes vegetarien!</p>';
        else
            echo '<p>Bonjour '.htmlspecialchars($_POST['prenom']).', vous n\'etes pas vegetarien et vous mangez de la viande!</p>';
    ?>
</body>
</html>