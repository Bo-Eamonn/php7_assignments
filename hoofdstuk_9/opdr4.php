<?php
    try{
        include("databaseconnectieFietsenmaker.php");
        if(isset($_POST['inloggen'])){
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
            $password = sha1($_POST['password']);
            $query = $db->prepare("SELECT * FROM gebruikers WHERE username = :user AND password = :pass");
            $query->bindParam("user", $username);
            $query->bindParam("pass", $password);
            $query->execute();
            if($query->rowCount() ==1){
                echo "Juiste gegevens!";
            } else{
                echo "Onjuiste gegevens!";
            }
            echo "<br>";
        }
    }
        catch(PDOException $e){
        die ("Error!: " . $e->getMessage());
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

    <div id="container">
        <p>
            In pargraaf 9.8.3 is uitgewerkt hoe je een eenvoudig inlogsysteem kan maken.
            <hr>
            Zie hier onder voor de output van paragraaf 9.8.3
        </p>
        <form action="" method="post">
            <label for="">USERNAME</label>
            <input type="text" name="username" id="user"><br>
            <label for="">PASSWORD</label>
            <input type="password" name="password" autocomplete="new-password" id="pass"><br><br>
            <input type="submit" value="Inloggen" name="inloggen">
        </form>
    </div>
    <div id="footer"></div>
</body>

</html>