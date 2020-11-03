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
//Sets a variable for the time, for example 1638
$time = date('Gi');
//Creates a random number between 1 and 100 for a humidity
$hum = rand(1,100);

//checks if the time has past 5pm
if ($time > 1700) {
    echo "Het is 17:00 geweest de verwarming moet uit";
}
//Checks if the random humidity is below 85
elseif ($hum <= 85) {
    echo "De luchtvochtigheid is lager dan 85%, de verwarming moet uit";
}
//if the humidity is above 85 and the time hasn't past 5pm the radiator has to stay on
else{
    echo "De verwarming mag aan blijven";
}
?>


    <div id="footer"></div>
</body>
</html>