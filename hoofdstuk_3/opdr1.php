<?php
//Say the current date
echo "Het is vandaag :" . date("l d F Y") . "<br>";
//says the current day in this year
echo "Vandaag is het de " . date("z"). " van het jaar." . "<br>";
//says the current day and the number of the day in the week
echo date("l") . " is dag " . date("N"). " van de week" . "<br>";
//says the total days the current month has
echo "De maand " . date("F") . " heeft in totaal " . date("t"). " dagen" . "<br>";

//checks if this year is a leap year.
//if it's output is 1 than it is a leap year of it's 0 it's not
$var1 = date("L");


if( $var1 == 1){
    echo "Het jaar " . date("Y") . " is een schrikkeljaar";
} else{
    echo "Het jaar " . date("Y") . " is geen schrikkeljaar";
}


?>