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