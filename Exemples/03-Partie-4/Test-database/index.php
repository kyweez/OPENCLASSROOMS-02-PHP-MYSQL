<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test avec les BDD</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
            padding: 4px;
            text-align: center;
        }

        th {
            background-color: blue;
            color: white;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=openclassrooms', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=? OR console=? ORDER BY nom DESC LIMIT 15');
        $requete->execute(array($_GET['console1'], $_GET['console2']));
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }
    ?>
    <h1>Test avec les BDD</h1>
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>possesseur</th>
            <th>console</th>
            <th>prix</th>
            <th>nbr joueur max</th>
            <th>commentaires</th>
        </tr>
        <?php
        while ($donnees = $requete->fetch()) {
        ?>
            <tr>
                <td><?php echo $donnees['ID'] ?></td>
                <td><?php echo $donnees['nom'] ?></td>
                <td><?php echo $donnees['possesseur'] ?></td>
                <td><?php echo $donnees['console'] ?></td>
                <td><?php echo $donnees['prix'] ?> $</td>
                <td><?php echo $donnees['nbre_joueurs_max'] ?></td>
                <td><?php echo $donnees['commentaires'] ?></td>
            </tr>
        <?php
        }
        $requete->closeCursor(); // Termine le traitement de la requête
        ?>
    </table>
</body>

</html>