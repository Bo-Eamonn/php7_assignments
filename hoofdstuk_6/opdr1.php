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
//Maak een script dat met een sessievariable kan bijhouden hoeveel keer een
//bezoeker op een bepaalde pagina is geweest voordat de browser is afgesloten.


session_start();

if(isset($_SESSION['views'])){ 
    $_SESSION['views'] = $_SESSION['views']+1; }
else{
    $_SESSION['views']=1; }
      
echo "Deze pagina heb je al: ".$_SESSION['views'] . " bekeken <br/> voordat je de internetbrowser heb afgesloten"; 
  



?>

    <div id="footer"></div>
</body>
</html>