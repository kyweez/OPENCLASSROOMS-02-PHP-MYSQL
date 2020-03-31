<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmission de donnees avec un formulaire</title>
</head>

<body>
    <form action="cible.php" method="POST">
        <p><label for="">Prenom : <input type="text" name="prenom"></label></p>
        <p><label for="">Etes-vous vegetarien ? <input type="checkbox" name="vegetarien"></label></p>
        <p><input type="submit" value="Envoyer"></p>

    </form>
</body>

</html>