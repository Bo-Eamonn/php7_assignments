<?php


//makes the hour into a variable
$time = date('G');

//tells the user the current time
echo  "Momenteel is het uur: ". $time . "<br>";

/*
I only check the hour in the current time.
But there are 60min in an hour so is the time is 5:59
the hour will say 5 so it's still night. Only when 
2 minutes (06:01) passes it will say it's morning
*/


//check for times between 00:00 and 05:59
if ($time == 0 || $time <=5) {
    echo "Het is nacht";
}
//check for times between 06:00 and 11:59
else if($time == 6 || $time <=11) {
    echo "Het is ochtend";
}
//check for times between 12:00 and 17:59
else if($time == 12 || $time <=17) {
    echo "Het is middag";
}
//Cause it has checked the times for the night, morning and noon, the only thing that's left will be evening.
else{
    echo "Het is avond";
}


?>