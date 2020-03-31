<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmission de donnees avec un formulaire</title>
</head>

<body>
    <p>
        Cette page ne contient que du HTML.<br />
        Veuillez taper votre prénom :
    </p>

    <form action="cible.php" method="post">
        <p>
            <input type="text" name="prenom" />
            <input type="submit" value="Valider" />
        </p>
    </form>
</body>

</html>