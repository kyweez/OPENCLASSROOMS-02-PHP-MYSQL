<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="./css/style-client-db.css" rel="stylesheet">
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
            echo '<section><div ><p id="error-section">' . $stringToPrint . '</p><a href="admin-access.php">Revenir à la page précédente</a></div></section>';
    }

    function print_html_footer()
    {
        echo '<footer><div><h1>Travel Agency<span class="orange">.</span></h1><div class="copyright">Copyright © Tous droits réservés.</div></div></footer>';
    }

    function connect_travel_agency_db(){
        try {
            return (new PDO('mysql:host=localhost;dbname=travel_agency;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)));
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            return (NULL);
        }
    }

    //On teste si la superglobale $_POST contient des donnees
    if (!empty($_POST)) {
        //On teste que les cases de de $_POST sont bien set
        if (isset($_POST['id']) and isset($_POST['password'])) {
            //On teste si les valeurs sont vides (ce n'est pas cense arriver grace au JS)
            if ($_POST['id'] != NULL and $_POST['password'] != NULL) {
                $pseudo = $_POST['id'];
                $pwd = $_POST['password'];
                $dataBase = connect_travel_agency_db();
                $request = $dataBase->prepare('SELECT * FROM admin_list WHERE pseudo = ? AND pwd = ?');
                $request->execute(array($_POST['id'], $_POST['password']));
                if ($data = $request -> fetch()){
                    echo '<br>PSEUDO : '. $data['pseudo'];
                    echo '<br>Password : '. $data['pwd'];
                }
                else{
                    echo 'MERDE';
                }


                print_html_header('Panneau de contrôle');
            }
            //Sinon on affiche quelle valeur est vide (si les 2 le sont, par defaut on demande l'identifiant)
            else {
                print_html_header('Accès administrateur');
                print_html_section('Veuillez saisir votre ' . ($_POST['id'] == NULL ? 'identifiant' : 'password'), true);
            }
        }
        //Sinon on affiche quelle case du $_POST n'est pas definie
        else {
            print_html_header('Accès administrateur');
            print_html_section('$_POST[' . htmlspecialchars(isset($_POST['id']) ? 'password' : 'id') . '] n\'est pas définie', true);//On protege la faille XSS
        }
    }
    //Sinon on affiche une page d'erreur qui precise que $_POST n'est pas definie
    else {
        print_html_header('Accès administrateur');
        print_html_section('La superglobale $_POST n\'est pas definie', true);
    }
    /*
        $dbAdministrator = PDO()
        if (isset($_POST['id']) and $_POST['id']=='admin'){
            ?>
                <section>
                    <div >
                        <h2>Liste des personnes à contacter</h2>
                        <div>

                        </div>
                        <a href="index.php">Revenir à l'accueil</a>
                    </div>
                </section>

                <footer>
                    <div>
                        <h1>Travel Agency<span class="orange">.</span></h1>
                        <div class="copyright">Copyright © Tous droits réservés.</div>
                    </div>
                </footer>
            <?php
        }
        else{
            ?>
                <p>Mauvais identifiants</p>
                <?php echo $_POST['id'];?>
            <?php
        }
        */
    print_html_footer();

    ?>


</body>

</html>