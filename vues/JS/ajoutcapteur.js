
var contenuLumiere = "";
var contenuTemperature = "";
var contenuMicro = "";


function createViewInputLight(){
    contenuLumiere = "";

    var numberOfDisplaysLight = document.getElementById("lightQuantity").value ;

    if(numberOfDisplaysLight <=10){
        for(var i = 1; i <= numberOfDisplaysLight; i++){
            contenuLumiere = contenuLumiere + "<label for='nameLightSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameLightSensor" + i + "' id='nameLightSensor" + i + " '/><br />";

        }
        document.getElementById('inputCapteurLumiere').innerHTML = contenuLumiere;
    }

    else{
        contenuLumiere = "";
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }

}

function createViewInputTemperature() {
    contenuTemperature = "";

    var numberOfDisplaysTemperature = document.getElementById("temperatureQuantity").value;

    if (numberOfDisplaysTemperature <= 10) {
        for (var i = 1; i <= numberOfDisplaysTemperature; i++) {
            contenuTemperature = contenuTemperature + "<label for='nameTemperatureSensor" + i + "'>Nom du capteur " + i + "</label> : <input type='text' name='nameTemperatureSensor" + i + "' id='nameTemperatureSensor" + i + " '/><br />";

        }
        document.getElementById('inputCapteurTemperature').innerHTML = contenuTemperature;
    }

    else {
        contenuTemperature = "";
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }
}


function createViewInputMicro() {
    contenuMicro = "";

    var numberOfDisplaysMicro = document.getElementById("microQuantity").value;

    if (numberOfDisplaysMicro <= 10) {
        for (var i = 1; i <= numberOfDisplaysMicro; i++) {
            contenuMicro = contenuMicro + "<label for='nameMicroSensor" + i + "'>Nom du capteur " + i + "</label> : <input type='text' name='nameMicroSensor" + i + "' id='nameMicroSensor" + i + " '/><br />";

        }
        document.getElementById('inputCapteurMicro').innerHTML = contenuMicro;
    }

    else {
        contenuMicro = "";
        alert("Mettez moins de 10 capteurs ou 10 capteurs");
    }
}