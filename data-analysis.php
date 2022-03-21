<!-- ACHTUNG, diese Datei ist noch nicht eingebettet -->

<?php 

// Frage 1

// ist ein Schlüssel gesetzt?, sonst hat der PHP Code einen Fehler
    //Die Funktion dazu: isset() (geht das auch manuell?). Es wird nur der Schlüssel getestet. ergo

    $totalPoints = 0;


if (isset($_SESSION ['index'])) {
    $post = $_SESSION['index']; // Schlüssel für wert im index.php das die Seiten ID bei mir
    $valueQuestion1 = $POST['slider']; // das der Name des Wertes, hier holen wir den Wert raus


    // DEVONLY
    echo "$post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter
}

    else {
        echo "Achtung, hier ist ein Development ERROR (not set). Schlüssel fehlt.";
    }


/*if ($valueQuestion1 <= 3) {
    //ungesund (0 Punkte) sind Werte von 0 bis 3
   $totalPoints = $totalPoints + 0;// short Version $totalPoints + = 0; 
}
else {
    //
    $totalPoints = $totalPoints +1; // short Version $total Points + = 1;
}

ergo wenn wert der Frage 1 über 3 ist, wird bei totalPoints 1 dazu gerechnet */

if ($valueQuestion1 < 3) {
    $totalPoints += 1;


        // DEVONLY
        echo "$totalPoints = $totalPoints<br>";

        // DEVONLY
        echo "$valueQuestion1 = $valueQuestion1<br>";

}

// Frage 2

if (isset($_SESSION ('page2'))) {
    $post = $_SESSION['page2']; // Schlüssel für wert im index.php das die Seiten ID bei mir
    $valueQuestion2 = $POST['radioName']; // das der Name des Wertes, hier holen wir den Wert raus

    else {
        echo "Achtung, hier ist ein Development ERROR (not set). Schlüssel fehlt.";
    }
}  

    if ($valueQuestion2 == radioJa) {
        $totalPoints += 1;
    }





?>