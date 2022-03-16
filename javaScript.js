/*
function validateForm () {
    let x = document.forms ["myForm"]["slider"].value;
    if ( x == "") {
        alert("Bitte geben Sie einen Wert an";) //hier kommt statt alert einen Text im Formular (p tag als innerhmtl?)
        return false;
    }
}
*/

//Das klappt noch nicht
function validateForm() {
    let inputElement = document.getElementById("slider");
    let value = inputElement.value;

    setWarning(`Der gewählte Wert ist ${value}`);

    return false;

}

//aus dem Head

<!--<!--JavaScript-->
<!--Validiert ob ein Wert eingeben wird, aber wie? ist ja 1-5 automatisch, bitte prüfen, wie validiere ich einen Slider -->

<script> 
  function validateForm () {
      let x = document.forms ["myForm"]["slider"].value;
      if ( x == "") {
          alert("Bitte geben Sie einen Wert an";) //hier kommt statt alert einen Text im Formular (p tag als innerhmtl?)
          return false;
      }
  } 

</script> -->