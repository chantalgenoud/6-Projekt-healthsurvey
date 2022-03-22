
<div>
<?php 

// Frage 1

// ist ein Schlüssel gesetzt?, sonst hat der PHP Code einen Fehler
    //Die Funktion dazu: isset() (geht das auch manuell?). Es wird nur der Schlüssel getestet. ergo

    $totalPoints = 0;


if (isset($_SESSION ['index'])) {
    $post = $_SESSION['index']; // Schlüssel für wert im index.php das die Seiten ID bei mir
    $valueQuestion1 = $post['slider']; // das der Name des Wertes, hier holen wir den Wert raus


    // DEVONLY
    echo '<pre>';
    print_r($post);
    echo '<pre>';
}

    else {
        echo "Achtung, hier ist ein Development ERROR (not set). Schlüssel fehlt.";
    }

    echo "$valueQuestion1";

/*if ($valueQuestion1 <= 3) {
    //ungesund (0 Punkte) sind Werte von 0 bis 3
   $totalPoints = $totalPoints + 0;// short Version $totalPoints + = 0; 
}
else {
    //
    $totalPoints = $totalPoints +1; // short Version $total Points + = 1;
}

ergo wenn wert der Frage 1 über 3 ist, wird bei totalPoints 1 dazu gerechnet */

if ($valueQuestion1 > 3) {
    $totalPoints += 1;


        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion1 = $valueQuestion1<br>";

}

/*


// Frage 2

if (isset($_SESSION ['page2'])) {
    $post = $_SESSION['page2']; // Schlüssel für wert im index.php das die Seiten ID bei mir
    $valueQuestion2 = $post['radioName']; // das der Name des Wertes, hier holen wir den Wert raus
}
    else {
        echo "Achtung, hier ist ein Development ERROR (not set). Schlüssel fehlt.";
    }
 

    if ($valueQuestion2 == "radioJa") {
        $totalPoints += 1;
    }

      // DEVONLY
      echo "\$totalPoints = $totalPoints<br>";
    
      // DEVONLY
      echo "\$valueQuestion2 = $valueQuestion2<br>";

// Frage 3
    $post = $_SESSION['page3']; // Schlüssel für wert im index.php das die Seiten ID bei mir
    $valueQuestion3 = $post['slider3']; // das der Name des Wertes, hier holen wir den Wert raus

    if ($valueQuestion3 > 3) {
        $totalPoints += 1;
    
    
            // DEVONLY
            echo "\$totalPoints = $totalPoints<br>";
    
            // DEVONLY
            echo "\$valueQuestion3 = $valueQuestion3<br>";
    
    }

// Frage 4

//wenn wert activities ja (activity = yes) dann einen plus auf total points dazu
$valueQuestion4 = $post['activity']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion4 == "yes") {
    $totalPoints += 1;


        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion4 = $valueQuestion4<br>";

}

// Frage 5 

$valueQuestion5 = $post['slider5']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion5 > 3) {
    $totalPoints += 1;


        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion5 = $valueQuestion5<br>";

}

// Frage 6

$valueQuestion6 = $post['number6']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion6 >= 2 ) {
    $totalPoints += 1;


        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion6 = $valueQuestion6<br>";

}


// Frage 7

$valueQuestion7 = $post['number7']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion7 >= 2 ) {
    $totalPoints += 1;


        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion7 = $valueQuestion7<br>";

}

// Frage 8 

$valueQuestion8 = $post['number8']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion8 >= 1 ) {
    $totalPoints += 1;


        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion8 = $valueQuestion8<br>";

}


// Frage 9
$valueQuestion9 = $post['number9']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion9 >= 1 ) {

        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion9 = $valueQuestion9<br>";

}

// Frage 10 Fertigood Mikrowelle wenn 0

$valueQuestion10 = $post['number10']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion10 == 1 ) {
    $totalPoints += 1;


        // DEVONLY
        echo "\$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "\$valueQuestion10 = $valueQuestion10<br>";

}
 */ ?>

</div>


<!-- Ergebnis und Weiterleitung

wenn total points grösser gleich 6 gesund else ungesund */

if ($totalPoints >= 6) {
    ;// gehe auf seite gesund
}

else {
    
    ;
;
}// ungesund 


--> 
