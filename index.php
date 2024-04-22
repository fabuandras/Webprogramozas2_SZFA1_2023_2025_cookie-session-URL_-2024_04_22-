<?php
    //ha nincs beállítva a látogatás, akkor 1
    if (!isset($_COOKIE["latogatas"]))


setcookie("felhasznalo", "Fabu András", time() + 5);
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["felhasznalo"])) {
            echo "Üdvözlünk, " .$_COOKIE["felhasznalo"]."!";
            echo "<br>Látogatások száma " .$_COOKIE["latogatasok"].".";
            
        }
        else {
            echo "Üdvözlünk, vendég!";
        }
    ?>
    <a href="url.php">url.php</a>
    <a href="hidden.php">hidden.php</a>
    <a href="session.php">session.php</a>
</body>
</html>