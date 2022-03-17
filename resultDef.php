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
        <div class = "col-12 mt-4">
            <h2>Ergebnis</h2>
                <p>Liebe/r <?php echo $_POST["vorname"]; ?>
<br>LOREM IPSUM DOLOR</p>
        </div>
    </div>
</div> 

<hr>

<?php include 'includeFooter.php';?>