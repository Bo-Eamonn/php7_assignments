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

            In paragraaf 8.4 wordt uitgelegd hoe je een PHP-script kunt combineren met een database <br>
            Voer alle stappen uit die in paragraaf 8.4 genoemd zijn.
            <hr>
            Zie hier onder voor de output van de laatste stap van paragraaf 8.4
        </p>
    
            <!-- Conectie maken met de database -->
            <!-- Aangezien mijn SQL dingetje geen gebruik maakt van een wachtwoord heb ik geen wachtwoord aangegeven -->
            <?php
            $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
            ?>
    </div>

    <div id="footer"></div>
</body>

</html>