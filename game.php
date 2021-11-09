<?php
session_start();
$_SESSION['keuzep2'] = $_GET['keuzep2'];
$playerOneInput = $_SESSION['keuzep1'];
$playerTwoInput = $_SESSION['keuzep2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Speler 1 heeft " . $_SESSION['keuzep1'] . " gekozen</h3>";
    echo "<h3>Speler 2 heeft " . $_SESSION['keuzep2'] . " gekozen</h3>";
    if ($playerOneInput === $playerTwoInput) {
        echo "<h2>Gelijk spel</h2>";
    } else if ($playerOneInput == "steen" && $playerTwoInput == "schaar") {
        echo "<h2>Speler 1 wint!</h2>";
    } else if ($playerOneInput == "schaar" && $playerTwoInput == "papier") {
        echo "<h2>Speler 1 wint!</h2>";
    } else if ($playerOneInput == "papier" && $playerTwoInput == "steen") {
        echo "<h2>Speler 1 wint!</h2>";
    } else if ($playerTwoInput == "steen" && $playerOneInput == "schaar") {
        echo "<h2>Speler 2 wint!</h2>";
    } else if ($playerTwoInput == "schaar" && $playerOneInput == "papier") {
        echo "<h2>Speler 2 wint!</h2>";
    } else if ($playerTwoInput == "papier" && $playerOneInput == "steen") {
        echo "<h2>Speler 2 wint!</h2>";
    }
    echo "<p><a href='index.php'>Nog een keer spelen?</a></p>";
    ?>
</body>
</html>