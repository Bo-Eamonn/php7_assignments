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
            In deze opdracht word een eenvoudig cijfersysteem gemaakt. In de praktijk zal een cijfersysteem niet de
            structuur gebruiken zoals in deze opdracht maar om het eenvoudig te houden is voor deze structuur gekozen.
            <hr>
            zie hier onder voor de cijferlijst. En een afbeelding van de gegevens binnen MyPhPAdmin.
        </p>
        <img src="/php7_assignments/static/img/databaseCijferlijst.png" alt="Cijferlijst vanuit SQL">
        <?php
        try{
            $db = new PDO("mysql:host=localhost;dbname=cijferlijsten", "root", "");
            $query = $db->prepare("SELECT * FROM cijfers");
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
            echo "<table>";
                foreach ($result as &$data) {
                echo "<tr>";    
                    echo "<td>" . $data["leerling"] . " </td>";
                    echo "<td>" . $data["cijfer"] . " </td>";
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