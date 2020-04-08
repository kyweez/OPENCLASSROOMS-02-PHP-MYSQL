<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="./css/style-contact-request.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">
    <title>Travel Agency</title>
</head>

<body>
    <?php

    function print_html_header($stringToPrint)
    {
        echo '<header><div><h1>' . $stringToPrint . '</h1></div></header>';
    }

    function print_html_section($stringToPrint, $error)
    {
        if ($error)
            echo '<section id="error-section"><div ><p>' . $stringToPrint . '</p><a href="index.php#contact">Revenir à la page précédente</a></div></section>';
    }

    function print_html_footer()
    {
        echo '<footer><div><h1>Travel Agency<span class="orange">.</span></h1><div class="copyright">Copyright © Tous droits réservés.</div></div></footer>';
    }

    function connect_to_db($dbName)
    {
        try {
            return (new PDO('mysql:host=localhost;dbname=' . $dbName . ';charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            return (NULL);
        }
    }

    //On teste si la superglobale $_POST contient des donnees
    if (!empty($_POST)) {
        //On teste que les cases de de $_POST sont bien set
        if (isset($_POST['name']) and isset($_POST['email'])) {
            //On teste si les valeurs sont vides (ce n'est pas cense arriver grace au JS)
            if ($_POST['name'] != NULL and $_POST['email'] != NULL) {
                //Creation d'alias pour les $_POST
                $pseudo = $_POST['id'];
                $pwd = $_POST['password'];
                $safe_pseudo = htmlspecialchars($pseudo);
                $safe_pwd = htmlspecialchars($pwd);

                //Connexion a la DB travel_agency
                $travelAgency_DB = connect_to_db('travel_agency');

                //Generation de la requete pour verifier l'acces utilisateur
                $request = $travelAgency_DB->prepare('SELECT * FROM admin_list WHERE pseudo = ? AND pwd = ?');
                $request->execute(array($pseudo, $pwd));

                //Verification des credentials et generation de la page
                if ($data = $request->fetch()) {
                    //Fermeture de la requete, on n'en a plus besoin
                    $request->closeCursor();
                    print_html_header('Panneau de contrôle');
    ?>
                    <section>
                        <div id="header-div">
                            <p>Connecté sur le compte : <strong><?php echo $safe_pseudo; ?></strong></p>
                            <p><a href="admin-access.php">Déconnexion</a></p>
                        </div>
                        <div>
                            <?php
                            //Generation d'une partie supplementaire uniquement accessible en tant qu'admin
                            if ($pseudo == 'admin') {
                                //Generation de la requete pour afficher le tableau des admins
                                $request = $travelAgency_DB->query('SELECT * FROM admin_list ORDER BY id');
                            ?>
                                <h2>Liste des administrateurs</h2>
                                <div id="admin-div">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Pseudo</th>
                                                <th>Dernière connexion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //Generation du tableau des a
                                            while ($data = $request->fetch()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $data['id']; ?></td>
                                                    <td><?php echo $data['pseudo']; ?></td>
                                                    <td>
                                                        <?php
                                                        //formatage de la date en version fr
                                                        $format_us = $data['last_connection'];
                                                        $format_fr = implode('/', array_reverse(explode('-', $format_us)));
                                                        echo  $format_fr;
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            //Fermeture de la requete, on n'en a plus besoin
                                            $request->closeCursor();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php
                            }
                            //Generation de la requete pour afficher le tableau
                            $request = $travelAgency_DB->query('SELECT * FROM contact_request ORDER BY id');
                            ?>
                            <h2>Liste des demandes de contact</h2>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nom du client</th>
                                            <th>Email du client</th>
                                            <th>Date de la demande</th>
                                            <th>Déjà contacté</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($data = $request->fetch()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td>
                                                    <?php
                                                    $format_us = $data['date_of_request'];
                                                    $format_fr = implode('/', array_reverse(explode('-', $format_us)));
                                                    echo  $format_fr;
                                                    ?>
                                                </td>
                                                <td><?php echo $data['already_contacted']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        //Fermeture de la requete, on n'en a plus besoin
                                        $request->closeCursor();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
    <?php
                } else {
                    print_html_header('Accès administrateur');
                    print_html_section('Mauvais identifiant ou password', true);
                }
            }
            //Sinon on affiche quelle valeur est vide (si les 2 le sont, par defaut on demande le nom)
            else {
                print_html_header('Erreur lors de la saisie');
                print_html_section('Veuillez saisir votre ' . ($_POST['name'] == NULL ? $_POST['email'] == NULL ? 'email et votre nom' : 'nom' : 'email'), true);
            }
        }
        //Sinon on affiche quelle case du $_POST n'est pas definie
        else {
            print_html_header('Erreur lors du transfert des données');
            print_html_section('$_POST[' . (isset($_POST['name']) ? 'email' : 'name') . '] n\'est pas définie', true); 
        }
    }
    //Sinon on affiche une page d'erreur qui precise que $_POST n'est pas definie
    else {
        print_html_header('Erreur lors du transfert des données');
        print_html_section('La superglobale $_POST n\'est pas definie', true);
    }
    print_html_footer();
    ?>
</body>

</html>