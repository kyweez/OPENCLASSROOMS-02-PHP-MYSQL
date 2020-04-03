<?php
session_start(); // On démarre la session AVANT toute chose
$_SESSION['nom'] = 'Neymar';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Informations</title>
</head>

<body>
    <h1>Informations sur les variables de session</h1>
    <div>
        <pre>
            <?php
                ?><p><h2>Variable $GLOBALS</h2><?php print_r($GLOBALS);?></p><?php
                ?><p><h2>Variable $_SERVER</h2><?php print_r($_SERVER);?></p><?php
                ?><p><h2>Variable $_ENV</h2><?php print_r($_ENV);?></p><?php
                ?><p><h2>Variable $_SESSION</h2><?php print_r($_SESSION);?></p><?php
                ?><p><h2>Variable $_COOKIE</h2><?php print_r($_COOKIE);?></p><?php
                ?><p><h2>Variable $_GET</h2><?php print_r($_GET);?></p><?php
                ?><p><h2>Variable $_POST</h2><?php print_r($_POST);?></p><?php
                ?><p><h2>Variable $_FILES</h2><?php print_r($_FILES);?></p>
        </pre>

    </div>
</body>

</html>