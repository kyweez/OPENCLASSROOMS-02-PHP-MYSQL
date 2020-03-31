<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi de fichiers</title>
</head>

<body>
    <h1>Envoi de fichiers</h1>
    <h2>Infos interessantes</h2>
    <ul>
        <li><a href="https://www.php.net/manual/fr/function.pathinfo.php">pathinfo</a></li>
        <li><a href="https://www.php.net/manual/fr/function.in-array.php">in_array</a></li>
        <li><a href="https://www.php.net/manual/fr/function.move-uploaded-file.php">move_uploaded_file</a></li>
        <li><a href="https://www.php.net/manual/fr/function.basename.php">basename</a></li>
    </ul>
    <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
            Formulaire d'envoi de fichier :<br />
            <input type="file" name="monfichier" /><br />
            <input type="submit" value="Envoyer le fichier" />
        </p>
    </form>
</body>

</html>