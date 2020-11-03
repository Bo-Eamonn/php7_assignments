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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
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
</body>

</html>


<?