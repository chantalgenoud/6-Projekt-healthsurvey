<?php include 'includeHead.php';?>
<?php include 'data-collector.php';?>

<body>


<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Umfrage zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <img src="logo.png">
        </div>
</div>

<!-- Dieser container ist nur für die erste Seite -->
<div class = "container">
    <div class = "row">
        <div class = "col-10 mt-4">
            <h2>Ergebnis: Ops, du lebst ungesund!</h2>
                <p>Liebe/r <?php echo $_POST["vorname"]; ?>
<br>Dein Ergebnis ist nicht als Urteil zu verstehen, sondern als eine Chance, die du nutzen solltest. Regelmässige Bewegung, sowie eine ausgelgelichene Ernährung sind Key für ein gesundes Leben. Tu es für dich! Weil du es dir Wert bist.</p>
        </div>
        <div class = "col-2 mt-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><path d="M294.254 53.596l-81.14.242-79.557 70.584 18.345 70.474 49.118-7.927-25.782 74.764 38.688-22.482 10.933 35.945 30.224-37.072 30.217 38.783 18.452-38.474 31.764 21.03-25.465-71.884 46.448 6.09 18.897-67.102-81.14-72.972zm-88.758 61.177c13.326-.112 28.287 8.99 35.945 26.98l-61.948 9.386c-2.103-24.275 10.9-36.24 26.004-36.367zm104.498 0c15.103.128 28.107 12.092 26.004 36.366l-61.95-9.386c7.66-17.99 22.62-27.093 35.946-26.98zm-54.533 38.483l25.66 56.723H233.18l22.283-56.724zM93.26 288.466l-41.963 29.23 207.34 72.683 207.338-73.034-40.993-28.88c-54.665 9.214-120.616-14.354-150.67 31.845h-31.415c-29.753-46.172-94.98-22.633-149.637-31.845zM29 329.763l-6.168 17.64L213.5 414.082v17.816h91.553v-18.69h-.05l188.17-65.804-6.17-17.64-205.655 71.92 4.03 11.525h-54.75l4.028-11.526L29 329.764zm230.43 38.187c-.36 3.167-.664 6.443-.893 9.868-.22-3.273-.51-6.404-.846-9.44l.75 1.325.99-1.752z"></path></svg>
        </div>
    </div>
</div> 

<hr>

<?php include 'includeFooter.php';?>