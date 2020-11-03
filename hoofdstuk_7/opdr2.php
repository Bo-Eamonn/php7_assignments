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

    <style>
        input[type=text],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid grey;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        label {
            text-align: justify;
            color: white;
        }

        input[type=submit] {
            background-color: #8AB9E3;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: wavy;
        }

        input[type=submit]:hover {
            background-color: #4a4fed;
        }


        #container {
            border-radius: 5px;
            background-color: #24252a;
            padding: 20px;
            margin: 50px 150px 25px 150px;
        }
    </style>
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