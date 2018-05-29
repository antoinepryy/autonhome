var contenuEffectorLumiere = "";
var contenuShutter = "";
var contenuFan = "";



function createViewEffectorLight(){
    contenuEffectorLumiere = "";


    var numberOfDisplaysLightEffector = document.getElementById("effectorlightQuantity").value ;

    if(numberOfDisplaysLightEffector <=10){
        for(var i = 1; i <= numberOfDisplaysLightEffector; i++){
            contenuEffectorLumiere = contenuEffectorLumiere + "<label for='nameLightEffector" + i + "'>Nom de l'interrupteur de lumière"+ i +"</label> : <input type='text' name='nameLightEffector" + i + "' id='nameLightEffector" + i + " ' required/><br />";

        }
        document.getElementById('inputEffectorLight').innerHTML = contenuEffectorLumiere;
    }

    else{
        contenuEffectorLumiere = "";
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }

}

function createViewInputShutter() {
    contenuShutter = "";

    var numberOfDisplaysShutter = document.getElementById("shutterQuantity").value;

    if (numberOfDisplaysShutter <= 10) {
        for (var i = 1; i <= numberOfDisplaysShutter; i++) {
            contenuShutter = contenuShutter + "<label for='nameShutter" + i + "'>Nom du volet " + i + "</label> : <input type='text' name='nameShutter" + i + "' id='nnameShutter" + i + " ' required/><br />";

        }
        document.getElementById('inputShutter').innerHTML = contenuShutter;
    }

    else {
        contenuShutter = "";
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }
}


function createViewInputFan() {
    contenuFan = "";

    var numberOfDisplaysFan = document.getElementById("fanQuantity").value;

    if (numberOfDisplaysFan <= 10) {
        for (var i = 1; i <= numberOfDisplaysFan; i++) {
            contenuFan = contenuFan + "<label for='nameFan" + i + "'>Nom du ventilateur " + i + "</label> : <input type='text' name='nameFan" + i + "' id='nameFan" + i + " ' required/><br />";

        }
        document.getElementById('inputFan').innerHTML = contenuFan;
    }

    else {
        contenuFan = "";
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }
}
