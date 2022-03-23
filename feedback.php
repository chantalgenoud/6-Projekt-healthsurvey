<?php include 'includeHead.php';?> 

<?php include 'data-collector.php';?>
<?php include 'data-analysis.php'; ?>


</head> 

<html>
<body>
 
<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Ergebnis zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <img src="logo.png">
        </div>
    </div>
</div>

<?php
        // DEVONLY
        echo "Total Punkte sind  $totalPoints<br>"; ?>

<!--// Ergebnis und Weiterleitung

wenn total points grösser gleich 6 ,gesund else ungesund 

if ($totalPoints >= 6) {
    ;// zeige  gesund an
}

else {
    //zeige ungesund an
    ;
;
}// ungesund  -->


</div>  

 <!-- Wenn total Points grösser gleich 6 dann ja gesund-->
<div class = "container">
    <div class = "row">
        <div class = "col-10 mt-4">
            <h2>Ergebnis: Du lebst gesund!</h2>
            <!-- so  hole ich einen Wert aus einem ARRAY, sprich $_SESSION als $post Variable und dann aus der Variable $post 
            den 'vorname' holen und als $ variabel vorname speichern, dann über echo "" anzeigen. Jupi -->
            <?php $post = $_SESSION['index'];
                $vorname = $post['vorname']; 
                echo "Lieber $vorname"; ?>
<br>Dein Ergebnis ist durchaus positiv. Bleib dran!</p>
        </div>
        <div class = "col-2 mt-4">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><path d="M192 17.65l16 34h96l16-34zm-9 53v51.95h32v22.2c-19.3-9-42.6-8.2-55-8.2-50.5 0-82.1 21.9-99.5 48-17.4 26.1-21.5 55.5-21.5 73 0 52.5 38.6 94.4 83.3 131C167 425.1 219 457.3 249.6 488l6.4 6.3 6.4-6.3c30.6-30.7 82.6-62.9 127.3-99.4 44.7-36.6 83.3-78.5 83.3-131 0-17.5-4.1-46.9-21.5-73s-49-48-99.5-48c-12.4 0-35.7-.8-55 8.2v-22.2h32V70.65zm18 18h110v15.95H201zm32 33.95h46v60.7l15.4-15.3c11.7-11.8 41.6-13.4 57.6-13.4 45.5 0 69.9 18.1 84.5 40 14.6 21.9 18.5 48.5 18.5 63 0 43.5-33.4 81.7-76.7 117-40.7 33.4-89 63.5-122.3 94.7-33.3-31.2-81.6-61.3-122.3-94.7-43.3-35.3-76.7-73.5-76.7-117 0-14.5 3.9-41.1 18.5-63s39-40 84.5-40c16 0 45.9 1.6 57.6 13.4l15.4 15.3zm-41 71c-64 0-80 48-80 80 0 64 80 96 144 144 64-48 144-80 144-144 0-32-16-80-80-80-32 0-48 0-64 48-16-48-32-48-64-48zm125.7 14.6c3.6-.1 5.9.3 5.8.6-16.5 7.3-33.9 24.4-44.6 41.7 0 0-3.2-17.7 9.9-31.9 7.4-8.1 21.1-10.3 28.9-10.4zM192 209.6c-24 21.5-41.3 58.2-47.2 90.4 0 0-19.5-23.7-7.7-53.4 9.8-24.5 50.1-36.5 54.9-37z"></path></svg>        </div>
        </div>
    </div>
</div> 

<hr>


<!--Wenn total Points kleiner 6 dann ungesund -->


<!-- Dieser container ist nur für die erste Seite -->
<div class = "container">
    <div class = "row">
        <div class = "col-10 mt-4">
            <h2>Ergebnis: Ops, du lebst ungesund!</h2>
                
<!-- So hole ich einen Wert aus einem ARRAY -->
                <?php $post = $_SESSION['index'];
                $vorname = $post['vorname']; 
                echo "Lieber $vorname"; ?>

<br>Dein Ergebnis ist nicht als Urteil zu verstehen, sondern als eine Chance, die du nutzen solltest. Regelmässige Bewegung, sowie eine ausgelgelichene Ernährung sind Key für ein gesundes Leben. Tu es für dich! Weil du es dir Wert bist.</p>
        </div>
        <div class = "col-2 mt-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><path d="M294.254 53.596l-81.14.242-79.557 70.584 18.345 70.474 49.118-7.927-25.782 74.764 38.688-22.482 10.933 35.945 30.224-37.072 30.217 38.783 18.452-38.474 31.764 21.03-25.465-71.884 46.448 6.09 18.897-67.102-81.14-72.972zm-88.758 61.177c13.326-.112 28.287 8.99 35.945 26.98l-61.948 9.386c-2.103-24.275 10.9-36.24 26.004-36.367zm104.498 0c15.103.128 28.107 12.092 26.004 36.366l-61.95-9.386c7.66-17.99 22.62-27.093 35.946-26.98zm-54.533 38.483l25.66 56.723H233.18l22.283-56.724zM93.26 288.466l-41.963 29.23 207.34 72.683 207.338-73.034-40.993-28.88c-54.665 9.214-120.616-14.354-150.67 31.845h-31.415c-29.753-46.172-94.98-22.633-149.637-31.845zM29 329.763l-6.168 17.64L213.5 414.082v17.816h91.553v-18.69h-.05l188.17-65.804-6.17-17.64-205.655 71.92 4.03 11.525h-54.75l4.028-11.526L29 329.764zm230.43 38.187c-.36 3.167-.664 6.443-.893 9.868-.22-3.273-.51-6.404-.846-9.44l.75 1.325.99-1.752z"></path></svg>
        </div>
    </div>
</div> 

<hr>




<?php include 'includeFooter.php';?>