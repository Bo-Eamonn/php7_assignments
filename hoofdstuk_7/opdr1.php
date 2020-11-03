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