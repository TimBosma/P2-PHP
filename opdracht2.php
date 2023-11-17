<?php
    // auteur: Tim Bosma
    // functie datum
 
    // initialisatie





    date_default_timezone_set("Europe/Amsterdam");
    $today = date("l j F Y");
    $dayyear = date("z");
    $dayname = date("l");
    $numberdayweek = date("w");
    $monthname = date("F");
    $numberdaymonth = date("t");
    $yearname = date("Y");
    $leapyear = date("L");
 

    
    // main

    echo "Vandaag is het: $today.";
 
    echo "<br>";

 
    echo "Vandaag is het de $dayyear e dag van het jaar.";
 
    echo "<br>";

 
    echo "$dayname is de $numberdayweek e dag van de week.";
 
    echo "<br>";

 
    echo "De maand $monthname heeft in totaal $numberdaymonth dagen.";
 
    echo "<br>";


 
    if ($leapyear == 1) {
        echo "Het jaar $yearname is een schrikkeljaar.";
    }
    else {
        echo "Het jaar $yearname is geen schrikkeljaar.";

    }




?>