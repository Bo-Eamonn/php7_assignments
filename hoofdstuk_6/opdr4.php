<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdrachten Bo PhP7</title>

    <link rel="stylesheet" href="/php7_assignments/static/styles/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/php7_assignments/static/js/template.js"></script>
</head>
<body>
    <div id="header"></div><br><br><br><br>
<?php
//maak een script dat twee functies heeft
//het uitrekenen van de omtrek en het oppervlakte van een circle.

$r = rand(1,50);
$circPi = 2 * $r * M_PI;
$surfPi = $r * $r * M_PI;

echo "De omtrek van een cirkel met een straal van " . $r . " is " . $circPi . "<br>";
echo "Het oppervlakte van een cirkel met een straal van " . $r . " is " . $surfPi;

?>

    <div id="footer"></div>
</body>
</html>