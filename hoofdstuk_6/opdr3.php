
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
// Maak een functie die een willekeurige postcode kan generen.

$postNum = rand(1000, 9999);
$shufRand1 = rand(0, 25);
$shufRand2 = rand(0, 25);

$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$shuffled = str_shuffle($str);
$postLet = $shuffled[$shufRand1].$shuffled[$shufRand2];


echo $postNum . " " . $postLet;

?>

    <div id="footer"></div>
</body>
</html>