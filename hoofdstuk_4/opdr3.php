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


//define 'waarde' to variable
$waarde1 = rand(1,1000);
$waarde2 = rand(1,1000);

echo " mijn gegeven waarden zijn " . $waarde1 . " en " . $waarde2 . "<br><br>";

//checks if $waarde2 is bigegr than $waarde1
if ($waarde2 > $waarde1) {
    $uitkomst = $waarde2 * 2 + $waarde1; 
    echo "Uitkomst: " . $uitkomst;
} 
//checks if $waarde1 is bigger than $waarde2
else if($waarde1 > $waarde2){
    $uitkomst = $waarde1 * 2 + $waarde2;  
    echo "Uitkomst: " . $uitkomst;
}
//if both variables are the same it will say it's the same
else {
    echo "De gegevens waardes zijn het zelfde";
}

?>

    <div id="footer"></div>
</body>
</html>