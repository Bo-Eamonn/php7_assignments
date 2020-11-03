<?php
//makes 3 different variables this random value between 1 and 10
$length1 = rand(1,10);
$length2 = rand(1,10);
$length3 = rand(1,10);

//tells the user the length of the sides
echo "Zijde 1: " . $length1. "cm <br>";
echo "Zijde 2: " . $length2. "cm <br>";
echo "Zijde 3: " . $length3. "cm <br>";

//checks if all the lengths are the same
if($length1 == $length2 && $length2 == $length3){
    echo"Kan niet alle lengths zijn even groot";
//Checks if length 1 is smaller than 2 and if 2 is smaller than 3. 
//But it also checks if 2 is smaller than 1 and 1 is smaller than 2
} elseif($length1 <= $length2 && $length2 <= $length3 || $length2 <= $length1 && $length1 <= $length3){
    //if one of those two are correct, wich means length 1 and 2 are smaller than length 3
    //creates variable $som wich hold the value of length 1 and 2 combined
    $som= $length1 + $length2;
    //checks if som is bigger than length3
    if($som > $length3) {
        echo"Kan wel";
    } else {
        echo"Kan niet";
    }
}
//Checks if length 1 is smaller than 3 and if 3 is smaller than 2. 
//But it also checks if 3 is smaller than 1 and 1 is smaller than 2
elseif($length1 <= $length3 && $length3 <= $length2 || $length3 <= $length1 && $length1 <= $length2){
    //if one of those two are correct, wich means length 1 and 3 are smaller than length 2
    //creates variable $som wich hold the value of length 1 and 3 combined
    $som = $length1 + $length3;
    //checks if som is bigger than length2
    if($som > $length2){
        echo"kan wel";
    } else {
        echo"kan niet";
    }
}
else{
    //Because we now allready have checked of the numbers are the same and above checked the other possibility's we don't have to check it here
    //cause of that we allready know length 2 and 3 are the smallest
    //so $som now holds the value of length 2 and 3 combined
    $som= $length2 + $length3;
    if($som > $length1){
        echo"kan wel";
    }else {
        echo"Kan niet";
    }
}

?>