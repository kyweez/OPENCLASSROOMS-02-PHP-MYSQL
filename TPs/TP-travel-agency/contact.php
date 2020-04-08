<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="./css/style-contact.css" rel="stylesheet">
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
                    <li><a href="./index.php?alreadyContacted=yes#steps">Destinations</a></li>
                    <li><a href="./index.php?alreadyContacted=yes#possibilities">Circuits</a></li>
                    <li><a href="./index.php?alreadyContacted=yes#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="contact">
        <div class="wrapper">
            <h2>Bonjour Mme / Mr <?php echo '<span id="nameInput">' . htmlspecialchars($_POST['name']) . '</span>'; ?></h2>
            <div>
                <p>
                    Merci pour votre confiance ! Votre demande de contact nous a été transmise.<br>Nous vous recontacterons au plus vite à l'adresse ci-dessous.
                </p>
                <?php echo '<p style="font-weight:bold; height: 50px;">' . htmlspecialchars($_POST['email']) . '</p>'; ?>
                <a href="index.php?alreadyContacted=yes">Cliquez ici pour revenir sur la page principale</a>
            </div>
            <a href="index.php?alreadyContacted=yes"><img src="https://pngimage.net/wp-content/uploads/2018/05/bonnes-vacances-png-8.png" alt="Image Vacances"></a>
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