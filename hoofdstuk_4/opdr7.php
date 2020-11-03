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
//for the sake of this assignment the amount saved will be random between 500 and 1200
$spaargeld = rand(500,1200);
//The iPhone cost 1000 euro
$goal = 1000;
//Calculates how much you got to save for the iPhone
$toGo = $goal - $spaargeld;
//Calculates how much is left after you would buy the Iphone
$left = $spaargeld - $goal;
//Checks if you saved enough to buy the iphone, and tells you how much is left to buy a phone case
if ($spaargeld > $goal) {
    echo "Je spaargeld is nu: " . $spaargeld . " euro, hiermee is het mogelijk om de iPhone te kopen!";
    echo " Je hebt nog "  . $left . " over om een hoesje te kopen."; 
}
//Checks if you saved more than 750 but less than 1000, it also tells you how much you got to save
elseif ($spaargeld > 750 && $spaargeld < $goal) {
    echo "Je bent er bijna nog " . $toGo . " euro te gaan.";
}
//Checks if you saved less than 750, and it tells you to find work
elseif ($spaargeld <= 750) {
    echo "Je hebt momenteel te weinig voor een iPhone, zoek een baantje.";
}


?>

    <div id="footer"></div>
</body>
</html>
