<?php
//define variable $number with a random value
$number = rand(1,1000);
//Asks the question if the given number is even or odd
echo "Is het getal " . $number . " een even getal?";
echo "<br>";
//checks if its a odd number
if($number % 2 == 1){ 
    //tells the user its an odd number
    echo "Nee het is geen even getal";  
} 
else{ 
    //tells the user it's an even number
    echo "Ja het is een even getal"; 
} 


?>