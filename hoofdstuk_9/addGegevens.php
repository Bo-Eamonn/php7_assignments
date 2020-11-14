<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("INSERT INTO gebruikers(username, password) VALUES ('ik','" . sha1('geheim') . "')");
    if($query->execute()){
        echo "nieuwe gegevens zijn toegevoeg;";
    } else {
        echo "er is iets is gegaan";
    }
} catch(PDOException $e){
    die ("error!: " . $e->getMessage());
}