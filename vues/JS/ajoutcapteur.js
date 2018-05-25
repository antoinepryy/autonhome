
var contenuLumiere = "";
var contenuTemperature = "";
var contenuMicro = "";


function createViewInputLight(){
    contenuLumiere = "";

    var numberOfDisplaysLight = document.getElementById("lightQuantity").value ;

    if(numberOfDisplaysLight <=10){
        for(var i = 1; i <= numberOfDisplaysLight; i++){
            contenuLumiere = contenuLumiere + "<label for='nameSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";

        }
        document.getElementById('inputCapteurLumiere').innerHTML = contenuLumiere;
    }

    else{
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }

}

function createViewInputTemperature() {
    contenuTemperature = "";

    var numberOfDisplaysTemperature = document.getElementById("temperatureQuantity").value;

    if (numberOfDisplaysTemperature <= 10) {
        for (var i = 1; i <= numberOfDisplaysTemperature; i++) {
            contenuTemperature = contenuTemperature + "<label for='nameSensor" + i + "'>Nom du capteur " + i + "</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";

        }
        document.getElementById('inputCapteurTemperature').innerHTML = contenuTemperature;
    }

    else {
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }
}


function createViewInputMicro() {
    contenuMicro = "";

    var numberOfDisplaysMicro = document.getElementById("microQuantity").value;

    if (numberOfDisplaysMicro <= 10) {
        for (var i = 1; i <= numberOfDisplaysMicro; i++) {
            contenuMicro = contenuMicro + "<label for='nameSensor" + i + "'>Nom du capteur " + i + "</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";

        }
        document.getElementById('inputCapteurMicro').innerHTML = contenuMicro;
    }

    else {
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }
}