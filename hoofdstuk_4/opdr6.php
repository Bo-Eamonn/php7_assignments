<?php
//Sets a variable for the time, for example 1638
$time = date('Gi');
//Creates a random number between 1 and 100 for a humidity
$hum = rand(1,100);

//checks if the time has past 5pm
if ($time > 1700) {
    echo "Het is 17:00 geweest de verwarming moet uit";
}
//Checks if the random humidity is below 85
elseif ($hum <= 85) {
    echo "De luchtvochtigheid is lager dan 85%, de verwarming moet uit";
}
//if the humidity is above 85 and the time hasn't past 5pm the radiator has to stay on
else{
    echo "De verwarming mag aan blijven";
}
?>