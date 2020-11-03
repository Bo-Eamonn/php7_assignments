<?php
//Maak een BTW-calculater\\

$exbtw= $_POST['bedrag'];
$tarief= $_POST['btw'];
$btw= round(($tarief * $exbtw),2);
$inclusiefbtw = $exbtw + $btw;

?>
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


    
    <form id="container" method="POST">
        <label for="bedrag">
            Bedrag exclusief BTW
            <input type="text" placeholder="Vul bedrag in" name="bedrag">
        </label>
        <label for="hoog">
            hoog 21%
            <input type="radio" name="btw" value="0.21">
        </label>
        <label for="laag">
            laag 9%
            <input type="radio" name="btw" value="0.09">
        </label>
        <button type="submit" value="Bereken BTW">Uitrekenen</button>
        <hr>
        <?php 
            if(empty($_POST['bedrag'])){
                echo "<label>Voer een bedrag in.</label>";
            }
            else{
                echo "<label>Bedrag inclusief " .$tarief. " BTW: € ".$inclusiefbtw. "</label>";
            }
        ?>
    </form>

<div id="footer"></div>
</body>
</html>