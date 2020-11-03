<?php
/*
Part a)
minimale leeftijd voor scooter rijbewijs is 16
if-else-statment om te checken of je ouder ben dan 16 en dus examen mag doen voor je scooter
*/

//makes a variable age with an random age between 12 and 30
$age = rand(12,30);
echo "This is your current age: " . $age . "<br><br><br>";
echo "Deel A" . "<br>";
//Check if age is bigger than 16, if yes than you are old enough, else you are to young
if ($age >= 16) {
    echo "Je bent ouder dan 16 jaar dus je mag examen doen voor je scooterrijbewijs.";
} else {
    echo "Helaas ben je niet oud genoeg om examen te doen voor je scooterrijbewijs.";
}
echo "<br><br>";

/*
Part b)
minimale leeftijd om te mogen stemmen is 18 jaar
if-else-statement om te checken of je ouder ben dan 18 en dus mag stemmen.
*/

echo "Deel B" . "<br>";
//Check if age is bigger than 18, if yes than you are old enough, else you are to young
if ($age >= 18) {
    echo "Je bent oud genoeg om te mogen stemmen, veel plezier.";
} else {
    echo "Sorry je bent nog te jong om te mogen stemmen.";
}
echo "<br><br>";

/*
Part c)
voeg een variable toe die checkt of je een stem pas gekregen heb. 
geef deze de waarde true of false
*/


echo "Deel C" . "<br>";
//creates a variable for if you have an votepass of not
$votePass = false;
//makes an output to tell the user he/she doesn't have a vote pass
if($votePass == true){
    echo "je hebt een stempas";
}
else{
    echo "je hebt geen stempas";
}
echo "<br><br>";
/*
Part d)
voeg een if-else-statemant toe die checkt of je je stempas heb en 18 ben.
*/
echo "Deel D" . "<br>";
//checks if you older than 18 and if you have your vote pass. If you aren't older than 18 or of you don't have your vote pass you can't vote
if ($age >= 18 && $votePass == true) {
    echo "Je mag stemmen want je ben ouder dan 18 en je hebt een stempas";
} else {
    echo "Je mag niet stemmen want je bent of niet oud genoeg of je hebt geen stempas";
}

?>