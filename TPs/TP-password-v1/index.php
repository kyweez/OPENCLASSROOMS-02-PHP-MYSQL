<!DOCTYPE html>
<html lang="en">
<!-- INFORMATION POUR TESTER : LE PASSWORD = Kangourou-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_index.css">
</head>

<body>
    <header>
        <h1>NASA Secrets</h1>
    </header>
    <main>
        <p class="message">
            Hello, if you want to access to all the biggest NASA secrets, try to find the password !
        </p>
        <p class="message">
            Fill the form behind :
        </p>
        <form action="secrets.php" method="POST">
            <p>
                <label for="name">Name :</label>
                <input id="name" name="name" type="text" placeholder="Please insert your name"></p>
            <p>
                <label for="password">Password :</label>
                <input id="password" name="password" type="password" placeholder="Please insert your password">
            </p>
            <p>
                <input id="submit" type="submit" value="OK">
            </p>
        </form>
    </main>
    <footer>
        <p>Copyright &copy; - Kyweez</p>
    </footer>
</body>

</html>