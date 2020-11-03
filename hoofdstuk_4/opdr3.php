<?php


//define 'waarde' to variable
$waarde1 = rand(1,1000);
$waarde2 = rand(1,1000);

echo " mijn gegeven waarden zijn " . $waarde1 . " en " . $waarde2 . "<br><br>";

//checks if $waarde2 is bigegr than $waarde1
if ($waarde2 > $waarde1) {
    $uitkomst = $waarde2 * 2 + $waarde1; 
    echo "Uitkomst: " . $uitkomst;
} 
//checks if $waarde1 is bigger than $waarde2
else if($waarde1 > $waarde2){
    $uitkomst = $waarde1 * 2 + $waarde2;  
    echo "Uitkomst: " . $uitkomst;
}
//if both variables are the same it will say it's the same
else {
    echo "De gegevens waardes zijn het zelfde";
}

?>