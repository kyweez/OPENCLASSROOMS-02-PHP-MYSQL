<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_secrets.css">
</head>

<body>
    <?php
    function displayAccesDeniedHeader()
    {
        echo    '<header><h1>NASA Secrets</h1></header>';
    }
    function displayAccesGrantedHeader()
    {
        echo    '<header><h1>Welcome ' . $_POST['name'] . '</h1></header>';
    }
    function displayAccesDeniedMain()
    {
        echo    '<main>';
        echo    '<img style="
                    padding-bottom: 10%;
                    transform: rotate(0.04turn); 
                    height: 45%; 
                    width: 25%; 
                    filter: contrast(1%);" 
                    src="./img/ACCES_DENIED.png" 
                    alt="DENIED"
                >';
        echo    '<p style="height: 20%; font-size: 1.5vw;" >This is a restricted access !</p>';
        echo    '<a style="height: 20%; text-decoration: none;"href="index.php">Click here to go back to the main page</a>';
        echo    '</main>';
    }
    function displayAccesGrantedMain()
    {
        echo    '<main>';
        echo    '<ul style="height: 75%; font-size:2vw; list-style: none;">
                    <li>We can turn an asteroid into a spaceship</li>
                    <li>Microbes can recycle PCBs on Mars</li>
                    <li>A chariot with veil is on Venus</li>
                    <li>Submarine sits in Titan’s oil oceans</li>
                    <li>Sleeping in a space journey can be done during a long time</li>
                    <li>We have a lunar concrete base</li>
                    <li>A balloon will let us fly over Titan</li>
                    <li>We are creating a robot "superball" which bounces on other planets</li>
                    <li>We are developing microbes to "terraform" Mars</li>
                    <li>We create a space builder spider</li>
                </ul>';
        echo    '<a style="height: 10%; text-decoration: none;"href="index.php">Click here to go back to the main page</a>';
        echo    '</main>';
    }

    //Form verification and page generation
    if (isset($_POST['name']) and isset($_POST['password']))
    {
        displayAccesGrantedHeader();
        displayAccesGrantedMain();
    } else {
        displayAccesDeniedHeader();
        displayAccesDeniedMain();
    }
    ?>
    <footer>
        <p>Copyright &copy; - Kyweez</p>
    </footer>
</body>

</html>