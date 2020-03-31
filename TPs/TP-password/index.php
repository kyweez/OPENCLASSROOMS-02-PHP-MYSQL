<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Password</title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:bold' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>NASA Secrets</h1>
    </header>
    <main>
        <p>
            Hello, if you want to access to all the biggest NASA secrets, try to find the password !<br>
            Fill the form behind :
        </p>
        <form action="secrets.php" method="POST">
            <label for="name">Name : <input id="name" name="name" type="text" placeholder="Please insert your name"></label>
            <label for="password">Password : <input id="password" name="password" type="password" placeholder="Please insert your password"></label>
        </form>
    </main>
    <footer>
        <p>Copyright &copy; - Kyweez</p>
    </footer>
</body>

</html>