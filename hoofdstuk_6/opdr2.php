<?php
//Maak een script dat met een sessievariable kan bijhouden hoeveel keer een
//bezoeker op een bepaalde pagina is geweest voordat de browser is afgesloten.
//Hou nu ook bij hoevaak de pagina in totaal is bezocht ook nadat de browser is afgesloten.

//    setcookie("count1",$_SESSION['views'] = $_SESSION['views'] +1,time() + 3600);

session_start();
if (isset($_COOKIE['views'])){
    setcookie('views',$_COOKIE['views']+1,time()+3600);
}else{
    setcookie('views',1,time()+3600);
}

if(isset($_SESSION['views'])){ 
    $_SESSION['views'] = $_SESSION['views']+1; }
else{
    $_SESSION['views']=1; }

echo "Deze pagina heb je al: ".$_SESSION['views'] . " bekeken <br/> voordat je de internetbrowser heb afgesloten"; 
echo "<br><br>";
echo $_COOKIE;



?>