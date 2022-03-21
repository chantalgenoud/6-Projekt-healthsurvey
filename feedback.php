<?php include 'includeHead.php';?>
<?php include 'data-collector.php';?>
<?php include 'data-analyis.php'>



<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Feedback</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <img src="logo.png">
        </div>
</div>

<div class = "container">
    <div class = "row">
        <div class = "col-12 mt-4">
            <h2><p>Liebe/r <?php echo $_POST["vorname"];?>, danke für deine Teilnahme</h2></p>
        </div>
    </div>
</div> 

<hr>

<?php include 'includeFooter.php';?>