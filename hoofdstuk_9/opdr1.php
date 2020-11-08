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

    <div id="container">
        <p>
            In paragraaf 9.3 wordt uitgelegd hoe je door middel van een SELECT-statement gegevens uit een databasetabel kunt opvragen en weergeven. <br>
            Voer alle stappen uit die in paragraaf 9.3 genoemd zijn.
            <hr>
            Zie hier onder voor de output van paragraaf 9.3
        </p>
            <?php
            try{
                include("databaseconnectieFietsenmaker.php");
                $query = $db->prepare("SELECT * FROM fietsen");
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_ASSOC);
                echo "<table>";
                    foreach ($result as &$data) {
                    echo "<tr>";    
                        echo "<td>" . $data["merk"] . " </td>";
                        echo "<td>" . $data["type"] . " </td>";
                        echo "<td>&euro;" . number_format($data["prijs"],2,",",".") . " </td>";
                    echo "</tr>";
                        }
                echo "</table>";     
                } catch(PDOException $e){
                die("Error!: " . $e->getMessage());
            }
            ?>
    </div>
        <div id="footer"></div>
</body>

</html>