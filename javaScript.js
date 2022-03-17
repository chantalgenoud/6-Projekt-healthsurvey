/*
function validateForm () {
    let x = document.forms ["myForm"]["slider"].value;
    if ( x == "") {
        alert("Bitte geben Sie einen Wert an";) //hier kommt statt alert einen Text im Formular (p tag als innerhmtl?)
        return false;
    }
}
*/

/*Das klappt noch nicht
function validateForm() {
    let inputElement = document.getElementById("slider");
    let value = inputElement.value;

    setWarning(`Der gewählte Wert ist ${value}`);

    return false;

} */

//das in der schule gemacht
function validateNumber () {
    let value = document.getElementById("numberCarbon").value; //die anzahl snacks die pro tag gegessen wird als wert.
        if (value == "") {
        setWarning("Bitte geben Sie eine Zahl an!");

        return false; //es geht nicht auf die nächste Seite STOPP BAD COP, (wenn Bedingung true= es braucht keine Aktion)
        }
}

function setWarning (text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

//Das klappt noch nicht
function validateRadio(radioName){
    let radioButtons = document.getElementsByName(radioName); //radioButtons ist eine Liste mit leer, einem oder mehreren Radio Buttons sein

    // Wir müssen die Liste von allen radioButtons nach dem gewählten Werten durchsuchen
    for (let i = 0; i < radioButtons.length; i++) {
        let radioBtn = radioButtons[i];

        if (radioBtn.checked == true) {
            return true;
        }    
    } //es geht zu allen Buttons und prüft ob eines angewählt wurde, wenn ja return true


    // Kein Radio Button wurde angewählt.
    setWarning("Bitte wähle eine Option!");
    return false; //STOPP Submit
}
    

//aus dem Head

/*<!--JavaScript-->
<!--Validiert ob ein Wert eingeben wird, aber wie? ist ja 1-5 automatisch, bitte prüfen, wie validiere ich einen Slider -->

<script> 
  function validateForm () {
      let x = document.forms ["myForm"]["slider"].value;
      if ( x == "") {
          alert("Bitte geben Sie einen Wert an"); //hier kommt statt alert einen Text im Formular (p tag als innerhmtl?)
          return false;
      }
  } 

</script> */