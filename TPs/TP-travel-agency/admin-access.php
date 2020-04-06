<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="./css/style-admin-access.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">
    <title>Travel Agency</title>
</head>

<body>
    <header>
        <div class="wrapper">
            <h1>Travel Agency<span class="orange">.</span></h1>
            <nav>
                <ul>
                    <li><a href="./index.php">Accueil</a></li>
                    <li><a href="./index.php/#steps">Destinations</a></li>
                    <li><a href="./index.php/#possibilities">Circuits</a></li>
                    <li><a href="./index.php/#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="contact">
        <div class="wrapper">
            <h2>Accès administrateur. Saisissez vos identifiants :</h2>
            <div>
                <form action="bdd-demande-contact.php" method="POST">
                    <p><label for="">Identifiant</label></p>
                    <p><input type="text" placeholder="Saisissez votre identifiant"></p>
                    <p><label for="">Password</label></p>
                    <p><input type="password" placeholder="Saisissez votre password"></p>
                    <p><input type="submit" value="Valider"></p>
                </form>
            </div>
            <a href="index.php">Revenir à l'accueil</a>
        </div>
    </section>

    <footer>
        <div class="wrapper">
            <h1>Travel Agency<span class="orange">.</span></h1>
            <div class="copyright">Copyright © Tous droits réservés.</div>
        </div>
    </footer>

    <script src="script.js"></script>

</body>

</html>