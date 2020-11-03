<?php
//maak een calculator met de volgende gebruiksmogelijkheden
//optellen
//aftrekken
//vermenigvuldigen
//delen

$getal1 = $_POST['getal1'];
$getal2 = $_POST['getal2'];


if($_POST['reken'] == 'optellen') {
    $uitkomst = $getal1 + $getal2;
}
else if($_POST['reken'] == 'aftrekken') {
    $uitkomst = $getal1 - $getal2;
}
else if($_POST['reken'] == 'vermenigvuldigen') {
    $uitkomst = $getal1 * $getal2;
}
else if($_POST['reken'] == 'delen'){
    $uitkomst = $getal1 / $getal2;
}
else{
    $uitkomst = "Er is iets niet goed gegaan";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form id="container" method="post">
        <label for="getal1">
            getal 1
            <input type="text" name="getal1" placeholder="vul een getal in...">
        </label>
        <hr>
        <label for="optellen">
            <input type="radio" name="reken" id="optellen" value="optellen">
            optellen
        </label>
        <label for="aftrekken">
            <input type="radio" name="reken" id="aftrekken" value="aftrekken">
            aftrekken
        </label>
        <label for="vermenigvuldigen">
            <input type="radio" name="reken" id="vermenigvuldigen" value="vermenigvuldigen">
            vermenigvuldigen
        </label>
        <label for="delen">
            <input type="radio" name="reken" id="delen" value="delen">
            delen
        </label>
<hr>
        <label for="getal2">
            getal 2
            <input type="text" name="getal2" placeholder="vul een getal in...">
        </label>
        <button type="submit">Bereken</button>
        <hr>
        <?php 
        echo "<label>".$uitkomst."</label>"
        ?>
    </form>
</body>

</html>