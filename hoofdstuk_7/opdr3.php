<?php
// Maak een form die de achtergrond kleur aanpast.



if($_POST['color'] == 'red') {
    $color = "red";
}
else if($_POST['color'] == 'green') {
    $color = "green";
}
else if($_POST['color'] == 'yellow') {
    $color = "yellow";
}
else if($_POST['color'] == 'blue'){
    $color = "blue";
}
else{
    $color = "white";
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
    <style type="text/css">
        body{background-color: <?php echo $color?>;}
    </style>
    <form id="container" method="post">
    <label for="rood">
            <input type="radio" name="color" id="red" value="red">
            Rood
        </label>
        <label for="rood">
            <input type="radio" name="color" id="green" value="green">
            groen
        </label>
        <label for="rood">
            <input type="radio" name="color" id="yellow" value="yellow">
            Geel
        </label>
        <label for="rood">
            <input type="radio" name="color" id="blue" value="blue">
            Blauw
        </label>
        <label for="wit">
            <input type="radio" name="color" id="white" value="white">
            Wit
        </label>
        <hr>
        <button type="submit">Instellen</button>
    </form>
</body>
</html>