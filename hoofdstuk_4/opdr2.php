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
//makes the hour into a variable
$time = date('G');

//tells the user the current time
echo  "Momenteel is het uur: ". $time . "<br>";

/*
I only check the hour in the current time.
But there are 60min in an hour so is the time is 5:59
the hour will say 5 so it's still night. Only when 
2 minutes (06:01) passes it will say it's morning
*/



switch ($time){
    //check for times between 00:00 and 05:59
case ($time == 0 || $time <=5):
    echo "Het is nacht";
break;
//check for times between 06:00 and 11:59
case($time == 6 || $time <=11):
    echo "Het is ochtend";
break;
//check for times between 12:00 and 17:59
case($time == 12 || $time <=17):
    echo "Het is middag";
break;
//check for times between 18:00 and 23:59
case ($time == 18 || $time <=23):
    echo "Het is avond";
break;
}


?>

    <div id="footer"></div>
</body>
</html>
