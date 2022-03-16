<?php include 'includeHead.php';?>
<?php include 'data-collector.php';?>

<body>


<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Umfrage zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <strong><p>Frage 5/10</p></strong>
        </div>
</div>

<!-- Frage -->
<div class = "container">
    <div class = "row m-5">
        <div class = "col-8">
            <h2>5. Frage</h2>
                <p>Hast du das Gefühl, zu wenig, genügend oder zu viel zusätzliche körperliche Aktivitäten zu betreiben?</p>
                <p>(1= viel zu wenig; 5= viel zu viel)</p>
                <br>
        </div>

        <div class = "col-4">
<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><path d="M22 6.92l-1.41-1.41-2.85 3.21C15.68 6.4 12.83 5 9.61 5 6.72 5 4.07 6.16 2 8l1.42 1.42C5.12 7.93 7.27 7 9.61 7c2.74 0 5.09 1.26 6.77 3.24l-2.88 3.24-4-4L2 16.99l1.5 1.5 6-6.01 4 4 4.05-4.55c.75 1.35 1.25 2.9 1.44 4.55H21c-.22-2.3-.95-4.39-2.04-6.14L22 6.92z"></path></svg>    </div>
</div> 


<!--Hier kommt das Formular-->
<form name="myForm" action="page6.php" onsubmit="return validateForm()" method="post"> <!-- muss noch erstellt werden -->

<div class = "container">
        <div class = "row">
            <div class = "col-1 mt-4">
                <p class ="nummer">1</p>
            </div>

            <div class = "col-10">
                <div class="slidecontainer">
                    

                        <br>
                        <br>
                        <input type="range" min="1" max="5" class="slider" name="slider" id="slider">
                        <input type="hidden" name="pageID" value="page5"> <!-- Hidden Field -->
                        <div class = "submit">
                        <br>
                        <input type= "submit" class ="submitButtom" value="Eingabe">
                        </div>      
                </div>
            </div>

            <div class = "col-1 mt-4">
                <p class="nummer">5 </p>  
            </div>

        </div>
    </div>
</form> 

<br>
            <hr>

<?php include 'includeFooter.php';?>