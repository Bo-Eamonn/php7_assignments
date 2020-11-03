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