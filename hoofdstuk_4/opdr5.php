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
//define variable $number with a random value
$number = rand(1,1000);
//Asks the question if the given number is even or odd
echo "Is het getal " . $number . " een even getal?";
echo "<br>";
//checks if its a odd number
if($number % 2 == 1){ 
    //tells the user its an odd number
    echo "Nee het is geen even getal";  
} 
else{ 
    //tells the user it's an even number
    echo "Ja het is een even getal"; 
} 


?>

    <div id="footer"></div>
</body>
</html>
