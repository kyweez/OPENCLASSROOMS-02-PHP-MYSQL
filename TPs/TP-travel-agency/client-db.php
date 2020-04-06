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

        function print_html_header($stringToPrint){
            echo '<header><div><h1>'.$stringToPrint.'</h1></div></header>';
        }
        function print_html_section($stringToPrint, $error){
            if ($error)
                echo '<section><div ><p id="error-section">'.$stringToPrint.'</p><a href="admin-access.php">Revenir à la page précédente</a></div></section>';
        }
        function print_html_footer(){
            echo '<footer><div><h1>Travel Agency<span class="orange">.</span></h1><div class="copyright">Copyright © Tous droits réservés.</div></div></footer>';
        }

        //On teste si la superglobale $_POST contient des donnees
        if (!empty($_POST)){
            //On teste que les 
            if (isset($_POST['id']) AND isset($_POST['password'])){
                print_html_header('Panneau de contrôle');
                print_html_section('$_POST['.htmlspecialchars(isset($_POST['id'])?'password':'id').'] n\'est pas définie', true); 
            }
            //Sinon on affiche quelle case du $_POST n'est pas definie
            else{
                print_html_header('Accès administrateur');
                print_html_section('$_POST['.htmlspecialchars(isset($_POST['id'])?'password':'id').'] n\'est pas définie', true); 
            }
        }
        //Sinon on affiche une page d'erreur qui precise que $_POST n'est pas definie
        else{
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