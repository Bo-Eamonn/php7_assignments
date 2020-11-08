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
       
        <?php
            try{
                include("databaseconnectieFietsenmaker.php");
                $query = $db->prepare("SELECT * FROM fietsen WHERE id = " . $_GET['id']);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_ASSOC);
                
                echo "<p>";
                foreach($result as &$data){
                    echo "Artikelnummer: " . $data['id'] . "<br>";
                    echo "Merk: " . $data['merk'] . "<br>";
                    echo "Type: " . $data['type'] . "<br>";
                    echo "Prijs: &euro;" . number_format($data["prijs"],2,",",".") . " <br><br>";
                }
                echo "</p>";
            }   catch(PDOException $e){
                die ("Error!: " . $e->getMessage());
                }
        ?>
        <hr>
        <a href="opdr2.php">Terug naar de opdracht</a>
    </div>

    <div id="footer"></div>
</body>

</html>