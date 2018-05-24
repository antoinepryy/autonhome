
var j =1;
var contenuLumiere = "";
var contenuTemperature = "";
var contenuMicro = "";

function createViewInput(){
    var numberOfDisplaysLight =document.getElementById("lightQuantity").value ;
    var numberOfDisplaysTemperature =document.getElementById("temperatureQuantity").value ;
    var numberOfDisplaysMicro =document.getElementById("microQuantity").value ;

    alert(numberOfDisplaysLight);
    document.getElementById("DisplayInput").style.display = "none";


    for(var i = 1; i <= numberOfDisplaysLight; i++){
        contenuLumiere = contenuLumiere + "<label for='nameSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";
        contenuLumiere = contenuLumiere + "<label for='serialNumberSensor" + i + "'>Numéro de série du capteur "+ i +"</label> : <input type='text' name='serialNumberSensor" + i + "' id='serialNumberSensor" + i + " '/><br />";
    }

    for(var i = 1; i <= numberOfDisplaysTemperature; i++){
        contenuTemperature = contenuTemperature + "<label for='nameSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";
        contenuTemperature = contenuTemperature + "<label for='serialNumberSensor" + i + "'>Numéro de série du capteur "+ i +"</label> : <input type='text' name='serialNumberSensor" + i + "' id='serialNumberSensor" + i + " '/><br />";
    }

    for(var i = 1; i <= numberOfDisplaysMicro; i++){
        contenuMicro = contenuMicro + "<label for='nameSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";
        contenuMicro = contenuMicro + "<label for='serialNumberSensor" + i + "'>Numéro de série du capteur "+ i +"</label> : <input type='text' name='serialNumberSensor" + i + "' id='serialNumberSensor" + i + " '/><br />";
    }


    document.getElementById('inputCapteurLumiere').innerHTML = contenuLumiere;
    document.getElementById('inputCapteurTemperature').innerHTML = contenuTemperature;
    document.getElementById('InputCapteurMicro').innerHTML = contenuMicro;
}


