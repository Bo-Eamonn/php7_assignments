<?php
// Maak een functie die een willekeurige postcode kan generen.

$postNum = rand(1000, 9999);
$shufRand1 = rand(0, 25);
$shufRand2 = rand(0, 25);

$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$shuffled = str_shuffle($str);
$postLet = $shuffled[$shufRand1].$shuffled[$shufRand2];


echo $postNum . " " . $postLet;

?>