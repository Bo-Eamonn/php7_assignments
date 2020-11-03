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
    <title>Opdrachten Bo PhP7</title>

    <link rel="stylesheet" href="/php7_assignments/static/styles/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/php7_assignments/static/js/template.js"></script>
</head>

<body>
    <div id="header"></div><br><br><br><br>



    <style type="text/css">
        body {
            background-color: <?php echo $color?>;
        }
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
    <div id="footer"></div>
</body>

</html>