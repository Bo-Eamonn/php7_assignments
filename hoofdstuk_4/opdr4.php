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

$prijs = 2000; 


switch ($prijs) {
    case ($prijs <= 55):
        $nPrijs = $prijs * 1.11;
        echo "Oude prijs: €" . $prijs . ". Na verhoging van 11% is de prijs: €"  . $nPrijs;
    break;
    case($prijs > 55 && $prijs < 150):
        $nPrijs = $prijs * 1.16;
        echo "Oude prijs: €" . $prijs . ". Na verhoging van 16% is de prijs: €"  . $nPrijs;
    break;
    case ($prijs > 150):
        $nPrijs = $prijs * 1.19;
        echo "Oude prijs: €" . $prijs . ". Na verhoging van 19% is de prijs: €"  . $nPrijs;
    break;
}

?>

    <div id="footer"></div>
</body>
</html>
