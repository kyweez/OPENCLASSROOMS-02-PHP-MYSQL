<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="styles_resultat.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">
    <title>Travel Agency</title>
</head>

<body>
    <header>
        <div class="wrapper">
            <h1>Travel Agency<span class="orange">.</span></h1>
            <nav>
                <ul>
                    <li><a href="index.php/#main-image">Accueil</a></li>
                    <li><a href="index.php/#steps">Destinations</a></li>
                    <li><a href="index.php/#possibilities">Circuits</a></li>
                    <li><a href="index.php/#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <section id="contact">
        <div class="wrapper">
            <h2>Bonjour Mme/Mr <?php echo htmlspecialchars($_POST['name']); ?></h2>
            <p>
                Merci pour votre confiance ! Votre demande de contact nous a été transmise. Nous vous recontacterons au plus vite à l'adresse ci-dessous.
                <?php echo htmlspecialchars($_POST['email']); ?>
            </p>
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