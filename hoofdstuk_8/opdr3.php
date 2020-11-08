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
            In paragraaf 8.5 wordt uitgelegd hoe een databaseconnectie in één bestand kan
            worden geplaatst en dat dit bestand op andere pagina's kan worden ingelezen. <br>
            Voer alle stappen uit die in paragraaf 8.5 genoemd zijn.
            <hr>
            Zie hier onder voor de output van de laatste stap van paragraaf 8.3
        </p>
            <?php
            include("databaseconnectie.php")
            
            ?>

        <div id="footer"></div>
</body>

</html>