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
        <div>
            <h1>Accès administrateur</h1>
        </div>
    </header>

    <section>
        <div >
            <h2>Saisissez vos identifiants</h2>
            <div>
                <form action="client-db.php" method="POST">
                    <p><label for="id">Identifiant</label></p>
                    <p><input type="text"  name="id" id="id" placeholder="Saisissez votre identifiant"></p>
                    <p><label for="password">Password</label></p>
                    <p><input type="password" name="password" id="password" placeholder="Saisissez votre password"></p>
                    <p id="submit-button"><input type="submit" value="Valider"></p>
                </form>
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

    <!--<script src="./scripts/form-control-admin.js"></script>-->

</body>

</html>