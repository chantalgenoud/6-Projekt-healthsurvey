<?php include 'includeHead.php';?>

<!-- Frage -->
<div class = "container">
    <div class = "row m-5">
        <div class = "col-8">
            <h2>4. Frage</h2>
                <p>Welche zusätzliche körperliche Aktivität betreibst du am meisten? <br> 

        </div>
        <div class = "col-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><circle cx="17" cy="4" r="2"></circle><path d="M15.777,10.969c0.376,0.563,1.008,0.89,1.666,0.89c0.16,0,0.322-0.02,0.482-0.06l3.316-0.829L20.758,9.03l-3.316,0.829 l-1.379-2.067c-0.291-0.439-0.756-0.751-1.272-0.854l-3.846-0.77c-0.888-0.181-1.778,0.265-2.181,1.067l-1.658,3.316l1.789,0.895 l1.658-3.317l1.967,0.394L7.434,17H3v2h4.434c0.698,0,1.355-0.372,1.715-0.971l1.918-3.196l5.169,1.034l1.816,5.449l1.896-0.633 l-1.815-5.448c-0.226-0.679-0.802-1.188-1.506-1.33l-3.039-0.607l1.772-2.954L15.777,10.969z"></path></svg>
    </div>
</div> 

<!-- Hier kommt ein Formular-->
<!-- Hier kommt der Range Slider -->

<form name="myForm" action="page5.php" onsubmit="return validateForm()" method="post"> <!-- muss noch erstellt werden -->


<div class = "container">

            <div class = "col">
                        <br>
                        <br>
                    <div>
                        <input type="checkbox" class="activity" name="activity" id="none" value="none" checked>
                            <label for="none">Keine
                            </label>    
                    </div>         
                    <br>
                    <div>
                        <input type="checkbox" class="activity" name="activity" id="yes" value="yes" checked>
                            <label for="yes">Gewichte heben / Gehen / Wandern / Joggen / Rennen / Schwimmen / Tanzen / Fitness / Pilates / Yoga / Team Sport
                            </label>    
                    </div>
                    <br>
                    <div>
                        <input type="checkbox" class="activity" name="activity" id="yes" value="yes" checked>
                            <label for="yes">Andere <!--Hier kommt noch ein Formularfeld leer-->
                            </label>    
                    </div>
                    
                                <div class = "submit">
                            <br>
                            <input type= "submit" class ="submitButtom" value="Eingabe">
                                </div>

            </div>
    </div>
</form> 
    
    <hr>

<?php include 'includeFooter.php';?>