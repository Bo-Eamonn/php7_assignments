<?php

$prijs = 2000; 


switch ($prijs) {
    case ($prijs <= 55):
        $nPrijs = $prijs * 1.11;
        echo "Oude prijs: €" . $prijs . ". Na verhoging van 11% is de prijs: €"  . $nPrijs;
    break;
    case($prijs > 55 && $prijs < 150):
        $nPrijs = $prijs * 1.16;
        echo "Oude prijs: €" . $prijs . ". Na verhoging van 16% is de prijs: €"  . $nPrijs;
    break;
    case ($prijs > 150):
        $nPrijs = $prijs * 1.19;
        echo "Oude prijs: €" . $prijs . ". Na verhoging van 19% is de prijs: €"  . $nPrijs;
    break;
}

?>