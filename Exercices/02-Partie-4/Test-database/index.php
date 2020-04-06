<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Requete SQL (avec GET)</title>
</head>

<body>
    <h1>Exercice Requete SQL (avec GET)</h1>
    <p style="background-color: goldenrod; width: fit-content; padding: 5px; border: 1px solid black;">Exercice sur les requetes SQL avec des securites mises en place</p>
    <?php
    if (!empty($_GET)) {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=openclassrooms;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
        if (isset($_GET['possesseur']) and isset($_GET['prix_max']) and $_GET['possesseur'] != NULL and $_GET['prix_max'] != NULL) {
            $req->execute(array($_GET['possesseur'], $_GET['prix_max']));
            echo '<ul>';
            while ($donnees = $req->fetch()) {
                echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>Probleme d\'URL</p>';
            echo '<p>Ecrire cette url pour tester : <a href="http://localhost/OPENCLASSROOMS-02-PHP-MYSQL/Exercices/02-Partie-4/Test-database/index.php?possesseur=florent&prix_max=10">Ici</a></p>';
        }
        $req->closeCursor();
    } else {
    ?>
        <p>Attention l'URL ne contient pas de $_GET</p>
        <p><strong>Ecrire cette url pour tester : <a href="http://localhost/OPENCLASSROOMS-02-PHP-MYSQL/Exercices/02-Partie-4/Test-database/index.php?possesseur=florent&prix_max=10">Ici</a></strong></p>
    <?php

    }

    ?>
</body>

</html>