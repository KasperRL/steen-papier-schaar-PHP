<?php
session_start();
if (!isset($_GET['keuzep1'])) {
    $keuzes = ["steen", "papier", "schaar"];
    shuffle($keuzes);
    $keuze = $keuzes[0];
    $_SESSION['keuzep1'] = $keuze;
} else {
    $_SESSION['keuzep1'] = $_GET['keuzep1'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Speler 2</title>
</head>
<body>
    <h1>Steen Papier Schaar</h1>
    <form action="game.php" method="GET">
        <h2>Speler 2:</h2>
        <select name="keuzep2" id="optionsp2">
            <option value="steen">Steen</option>
            <option value="papier">Papier</option>
            <option value="schaar">Schaar</option>
        </select><br>
        <input type="submit" value="Spelen">
    </form>
</body>
</html>