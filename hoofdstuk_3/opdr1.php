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
//Say the current date
echo "Het is vandaag :" . date("l d F Y") . "<br>";
//says the current day in this year
echo "Vandaag is het de " . date("z"). " van het jaar." . "<br>";
//says the current day and the number of the day in the week
echo date("l") . " is dag " . date("N"). " van de week" . "<br>";
//says the total days the current month has
echo "De maand " . date("F") . " heeft in totaal " . date("t"). " dagen" . "<br>";

//checks if this year is a leap year.
//if it's output is 1 than it is a leap year of it's 0 it's not
$var1 = date("L");


if( $var1 == 1){
    echo "Het jaar " . date("Y") . " is een schrikkeljaar";
} else{
    echo "Het jaar " . date("Y") . " is geen schrikkeljaar";
}


?>

    <div id="footer"></div>
</body>
</html>

