
<div>
<?php 

$totalPoints = 0;

// Frage 1

// ist ein Schlüssel gesetzt?, sonst hat der PHP Code einen Fehler
    //Die Funktion dazu: isset() (geht das auch manuell?). Es wird nur der Schlüssel getestet. ergo




/*if (isset($_SESSION ['index'])) {
    $post = $_SESSION['index']; // Schlüssel für wert im index.php das die Seiten ID bei mir
    $valueQuestion1 = $post['slider']; // das der Name des Wertes, hier holen wir den Wert raus


    // DEVONLY
    echo '<pre>';
    print_r($post);
    echo '<pre>';
}

    else {
        echo "Achtung, hier ist ein Development ERROR (not set). Schlüssel fehlt.";
    } */


    $post = $_SESSION['index'];
    $valueQuestion1 = $post['slider']; //da war ein fehler das underline fehlte

    // sollte tendenziell auch so gehen $valueQuestion1 = $_SESSION['index']['slider'];


    echo "der Wert aus Frage eins ist $valueQuestion1";



/*if ($valueQuestion1 <= 3) {
    //ungesund (0 Punkte) sind Werte von 0 bis 3
   $totalPoints = $totalPoints + 0;// short Version $totalPoints + = 0; 
}
else {
    //
    $totalPoints = $totalPoints +1; // short Version $total Points + = 1;
}

ergo wenn wert der Frage 1 über 3 ist, wird bei totalPoints 1 dazu gerechnet */

if ($valueQuestion1 >= 3) {
    $totalPoints += 1;


        // DEVONLY
        echo "Die Anzahl Punkte sind $totalPoints<br>";


}



// Frage 2 in einfach


    $post = $_SESSION['page2'];
    $valueQuestion2 = $post['radioName']; //da war ein fehler das underline fehlte

    // sollte tendenziell auch so gehen $valueQuestion1 = $_SESSION['index']['slider'];


    echo "der Wert aus Frage 2 ist $valueQuestion2. ";

    if ($valueQuestion2 == "radioJa") {
        $totalPoints += 1;
    }

      // DEVONLY
      echo "Die Anzahl Punkte sind $totalPoints<br>";


// Frage 3
    $post = $_SESSION['page3']; // Schlüssel für wert im page3.php das die Seiten ID bei mir
    $valueQuestion3 = $post['slider3']; // das der Name des Wertes, hier holen wir den Wert raus

    if ($valueQuestion3 > 3) {
        $totalPoints += 1;
       
    }

    echo "der Wert aus Frage 3 ist $valueQuestion3. ";

    // DEVONLY
    echo "Die Anzahl Punkte sind $totalPoints<br>";


// Frage 4

//wenn wert activities ja (activity = yes) dann einen plus auf total points dazu
$post = $_SESSION['page4'];
$valueQuestion4 = $post['activity']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion4 == "yes") {
    $totalPoints += 1;

}

echo "der Wert aus Frage 4 ist $valueQuestion4. ";

// DEVONLY
echo "Die Anzahl Punkte sind $totalPoints<br>";


 // Frage 5 
$post = $_SESSION['page5'];
$valueQuestion5 = $post['slider5']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion5 = 3) {
    $totalPoints += 1;
}

echo "der Wert aus Frage 5 ist $valueQuestion5. ";

// DEVONLY
echo "Die Anzahl Punkte sind $totalPoints<br>";

 // Frage 6
$post = $_SESSION['page6'];
$valueQuestion6 = $post['number6']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion6 >= 2 ) {
    $totalPoints += 1;
}

echo "der Wert aus Frage 6 ist $valueQuestion6. ";

// DEVONLY
echo "Die Anzahl Punkte sind $totalPoints<br>";


// Frage 7
$post = $_SESSION['page7'];
$valueQuestion7 = $post['number7']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion7 >= 2 ) {
    $totalPoints += 1;
}

echo "der Wert aus Frage 7 ist $valueQuestion7. ";

// DEVONLY
echo "Die Anzahl Punkte sind $totalPoints<br>";

// Frage 8 
$post = $_SESSION['page8'];
$valueQuestion8 = $post['number8']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion8 >= 1 ) {
    $totalPoints += 1;
}

echo "der Wert aus Frage 8 ist $valueQuestion8. ";

// DEVONLY
echo "Die Anzahl Punkte sind $totalPoints<br>";


// Frage 9
$post = $_SESSION['page9'];
$valueQuestion9 = $post['number9']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion9 >= 1 ) {
    $totalPoints += 1;
}

echo "der Wert aus Frage 9 ist $valueQuestion9. ";

// DEVONLY
echo "Die Anzahl Punkte sind $totalPoints<br>";

// Frage 10 Fertigfood Mikrowelle wenn 0\$totalPoints +1


$post = $_SESSION['page10'];
$valueQuestion10 = $post['number10']; // das der Name des Wertes, hier holen wir den Wert raus

if ($valueQuestion10 == 0) {
    $totalPoints += 1;
}

echo "der Wert aus Frage 10 ist $valueQuestion10. ";

// DEVONLY
echo "Die Anzahl Punkte sind $totalPoints<br>";

?>

</div>



--> 
