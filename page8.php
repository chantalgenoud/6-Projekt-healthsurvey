<?php include 'includeHead.php';?>
<?php include 'data-collector.php';?>

<body>


<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Umfrage zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <strong><p>Frage 8/10</p></strong>
        </div>
</div>

<!-- Frage -->
<div class = "container">
    <div class = "row m-5">
        <div class = "col-8">
            <h2>8. Frage</h2>
                <p>An einem typischen Tag: Wie viele deiner
Mahlzeiten oder Snacks enthalten
Gemüse?</p>
                <br>
        </div>

        <div class = "col-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><path d="M330.67 263.12V173.4l-52.75-24.22C219.44 218.76 197.58 400 56 400a56 56 0 0 0 0 112c212.64 0 370.65-122.87 419.18-210.34l-37.05-38.54zm131.09-128.37C493.92 74.91 477.18 26.48 458.62 3a8 8 0 0 0-11.93-.59l-22.9 23a8.06 8.06 0 0 0-.89 10.23c6.86 10.36 17.05 35.1-1.4 72.32A142.85 142.85 0 0 0 364.34 96c-28 0-54 8.54-76.34 22.59l74.67 34.29v78.24h89.09L506.44 288c3.26-12.62 5.56-25.63 5.56-39.31a154 154 0 0 0-50.24-113.94z"></path></svg>
        </div>
    </div>


<!-- Hier kommt ein Formular-->
<!-- Hier kommt ein Feld für einen Zahl-->
<div class = "col-12 m-5">
                <div class="integer">
                    <form name="myForm" action="page9.php" onsubmit="return validateNumber()" method="post"> <!-- muss noch erstellt werden -->
                        <br>
                        <input type="hidden" name="pageID" value="page7"> <!--Hidden Field-->
                        <div>    
                            <input type="number" name="number" id="number">
                        </div>
                        <div class = "submit">
                        <br>
                        <p id="validation-warning" style="color:red"> </p> <!--Hier ist die Warnung aus JS, wenn nichts eingegeben wurde in rot-->
                        <input type= "submit" class ="submitButtom" value="Eingabe">
                        </div>      
                    </form> 
                </div>
            </div>
       </div>
    </div>
    
    <hr>

<?php include 'includeFooter.php';?>