<?php
session_start();
session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Speler 1</title>
</head>
<body>
    <h1>Steen Papier Schaar</h1>
    <form action="playerTwo.php" method="GET">
        <h2>Speler 1:</h2>
        <select name="keuzep1" id="optionsp1">
            <option value="steen">Steen</option>
            <option value="papier">Papier</option>
            <option value="schaar">Schaar</option>
        </select><br>
    <input type="submit" value="Speler 2">
    </form>
</body>
</html>