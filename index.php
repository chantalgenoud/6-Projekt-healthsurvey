<?php
session_start();
session_destroy(); //um den cache zu leeren

include 'includeHead.php';
?>

<body>


<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Umfrage zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <strong><p>Frage 1/10</p></strong>
        </div>
</div>

<!-- Dieser container ist nur für die erste Seite -->
<div class = "container">
    <div class = "row">
        <div class = "col-12 mt-4">
            <h2>Umfrage zu den Themen: Ernährung, Fitness  und Sport</h2>
                <p>Wie gesund und fit bist du derzeit? Durch diese Umfrage erhälst du eine Rückmeldung über Ihren Zustand. 
                    Die Umfrage beinhaltet 10 Fragen und dauert 8 Minuten. Eine kurze Auswertung hilft dir, deine Gesundheit
                    richtig einzuschätzen. Tip: Beantworte die Fragen nach nach deinem ersten Eindruck und zögere nicht allzu lange. 
                    Achtung: Dies ist ein semiqualitativer Test. Wenn du dich körplich krank fühlst und Beschwerden hast, konsultiere einen Arzt.</p>
        </div>
    </div>
</div> 

<hr>
<!--Nur für die erste Seite, Ende-->


<!-- Frage -->
<div class = "container">
    <div class = "row m-5">
        <div class = "col-8">
            <h2>1. Frage</h2>
                <p>Wie gesund bist du körperlich? <br> 
                (1 = gar nicht; 5 = sehr gesund)</p>
        </div>
        <div class = "col-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><ellipse cx="256" cy="80" rx="48" ry="48"></ellipse><path d="M424 144H88c-13.3 0-24 10.7-24 24s10.7 24 24 24h98.5c5.6 1 13.2 3.8 17.2 14.2 4.7 12.1 2.4 33.6-.5 51.7l-3.8 21.4c0 .1 0 .2-.1.3l-30.4 172.2c-2.3 13 6.4 25.5 19.5 27.8 13.1 2.3 25.3-6.4 27.6-19.5l21-119.9v.2s6.2-32.5 18.5-32.5h1.1c12.5 0 18.5 32.5 18.5 32.5v-.1l21 119.9c2.3 13 14.7 21.7 27.7 19.4 13.1-2.3 21.7-14.8 19.4-27.8l-30.4-172.2c0-.1 0-.2-.1-.3l-3.8-21.4c-2.9-18.1-5.2-39.6-.5-51.7 4-10.4 11.6-13.2 17.2-14.2H424c13.3 0 24-10.7 24-24s-10.7-24-24-24z"></path></svg>
    </div>
</div> 

<!-- Hier kommt ein Formular-->
<!-- Hier kommt der Range Slider -->

<form name="myForm" action="page2.php" onsubmit="return validateForm()" method="post"> <!-- muss noch erstellt werden -->
<div class = "row m-5">
        <div class = "col">
            Dein Vorname  <input type= "text" name="vorname"> <!--Das nur auf Seite 1-->
    </div>
</div>

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
                        <input type="hidden" name="pageID" value="index"> <!-- Hidden Field -->
                        <div class = "submit">
                        <br>
                        <input type= "submit" class ="submitButtom" value="Eingabe">
                        </div>      
                        <p id="slider"> </p> <!--Hier soll der Wert des Sliders provisorisch dargestellt werden, was nicht klappt-->
                </div>
            </div>

            <div class = "col-1 mt-4">
                <p class="nummer">5 </p>  
            </div>

        </div>
    </div>
</form> 
    
    <hr>

 <?php include 'includeFooter.php'?>