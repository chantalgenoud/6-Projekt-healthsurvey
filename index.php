<!-- Head -->

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage zu Ihrer Gesundheit</title>

  <!--JavaScript-->
  <!--Validiert ob ein Wert eingeben wird, aber wie? ist ja 1-5 automatisch, bitte prüfen, wie validiere ich einen Slider -->

  <script> 
    function validateForm () {
        let x = document.forms ["myForm"]["slider"].value;
        if ( x == "") {
            alert("Bitte geben Sie einen Wert an";) //hier kommt statt alert einen Text im Formular (p tag als innerhmtl?)
            return false;
        }
    }

  </script>

  <!--Bootsrap 5-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="stylesheet.css">

</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-8 p-3 m-5">
            <h1>Umfrage zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <strong><p>1/10</p></strong>
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

    <div class = "container">
        <div class = "row">
            <div class = "col-1">
                <p class ="nummer">1</p>
            </div>

            <div class = "col-10">
                <div class="slidecontainer">
                    <form name="myForm" action="resultTest.php" onsubmit="return validateForm()" method="post"> <!-- muss noch erstellt werden -->
                        Dein Vorname  <input type= "text" name="vorname">
                        <br>
                        <br>
                        <input type="range" min="1" max="5" class="slider" name="slider" id="silder">
                        <div class = "submit">
                        <br>
                        <input type= "submit" class ="submitButtom" value="Eingabe">
                        </div>      
                    </form> 
                </div>
            </div>

            <div class = "col-1">
                <p class="nummer">5 </p>  
            </div>

        </div>
    </div>
    
    <hr>

 <!--Footer-->   
    <div class ="container">
        <div clas = "col m-4">
            <p>Copyright = 2022 Alle Rechte vorbehalten </p>
            <p>Impressum = C. Genoud, Schaffhauserstrasse 285, 8057 Zürich, Schweiz</p>
        </div>
    </div>





</body>
</html>