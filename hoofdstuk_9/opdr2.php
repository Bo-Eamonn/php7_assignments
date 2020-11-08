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
            In paragraaf 9.4 wordt uitgewerkt hoe een master-detailpaginastructuur gemaakt kan worden. Deze structuur
            word veel gebruikt op onder andere websites met nieuwsberichten. Deze websites bevatten een overzichtpagina,
            met bijvoorbeeld titels van nieuwsberichten. Klikt ene bezoeker op een titel, dan wordt een nieuwe pagina
            geopend waarin het volledige bericht is weergegeven.
            <hr>
            Zie hier onder voor de output van paragraaf 9.4
        </p>
        <?php
            try{
                include("databaseconnectieFietsenmaker.php");
                $query = $db->prepare("SELECT * FROM fietsen");
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_ASSOC);
                foreach($result as &$data){
                    echo "<a href='detail.php?id=" . $data['id'] . "'>";
                        echo $data["merk"] . " " . $data["type"];
                    echo "</a>";
                    echo "<br>";
                }
            } catch(PDOException $e){
                die ("Error!: " . $e->getMessage());
            }

        ?>
    </div>
    <div id="footer"></div>
</body>

</html>