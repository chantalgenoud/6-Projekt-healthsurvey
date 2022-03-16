<!-- Head -->

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div class="container">
        <div class="col mt-5">
            <title>Umfrage zu Ihrer Gesundheit</title>
        </div>
    </div>

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