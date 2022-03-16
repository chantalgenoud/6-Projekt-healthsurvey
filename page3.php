<?php include 'includeHead.php';?>
<?php include 'data-collector.php';?>

<body>

<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Umfrage zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <strong><p>Frage 3/10</p></strong>
        </div>
</div>

<!-- Frage -->
<div class = "container">
    <div class = "row m-5">
        <div class = "col-8">
            <h2>3. Frage</h2>
            <p>Wie wichtig ist körperliche Aktivität für dich?</p> <br>
            <p>(1= nicht wichtig; 5= sehr wichtig)</p>
        </div>

        <div class = "col-4">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><path d="M338.8 31.81c-5 19.51-9.9 38.69-14.9 57.64-45.3 7.27-90.5 7.28-135.8 0-5-18.95-9.9-38.13-14.9-57.64 54.9 22.58 110.7 22.58 165.6 0zm17.3 4.59l34.4 45.95c-14 96.25-40 204.15-77.5 302.95-10.7-12.4-25.2-21.3-41.8-24.7 28.3-111.3 56.6-212.3 84.9-324.2zm-200.2 0c28.3 111.9 56.6 212.9 84.9 324.2-16.6 3.4-31.1 12.3-41.8 24.7-37.5-98.8-63.5-206.7-77.5-302.95zM256 377c31.6 0 57 25.4 57 57s-25.4 57-57 57-57-25.4-57-57 25.4-57 57-57z"></path></svg>    
        </div>
    </div>     
</div> 


<!-- Hier kommt ein Formular-->
<!-- Hier kommt der Range Slider -->

<form name="myForm" action="page4.php" onsubmit="return validateForm()" method="post"> <!-- muss noch erstellt werden -->

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
                        <input type="hidden" name="pageID" value="page3"> <!-- Hidden Field -->
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
    
    <hr>

<?php include 'includeFooter.php';?>