
var contenuLumiere = "";
var contenuTemperature = "";
var contenuMicro = "";

var disp = document.getElementById('disp');



function createViewInputLight(){
    console.log('1');

    var numberOfDisplaysLight = document.getElementById("lightQuantity").value ;
    document.getElementById('inputCapteurLumiere').innerHTML = "";


    for(var i = 1; i <= numberOfDisplaysLight; i++){
        contenuLumiere = contenuLumiere + "<label for='nameSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";

    }
    document.getElementById('inputCapteurLumiere').innerHTML = contenuLumiere;

}

function createViewInputTemperature(){
    console.log('2');
    var numberOfDisplaysTemperature = document.getElementById("temperatureQuantity").value ;


    for(var i = 1; i <= numberOfDisplaysTemperature; i++){
        contenuTemperature = contenuTemperature + "<label for='nameSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";

    }
    document.getElementById('inputCapteurTemperature').innerHTML = contenuTemperature;
}

function createViewInputMicro() {
    console.log('3');
    var numberOfDisplaysMicro = document.getElementById("microQuantity").value ;

    for(var i = 1; i <= numberOfDisplaysMicro; i++){
        contenuMicro = contenuMicro + "<label for='nameSensor" + i + "'>Nom du capteur "+ i +"</label> : <input type='text' name='nameSensor" + i + "' id='nameSensor" + i + " '/><br />";

    }
    document.getElementById('inputCapteurMicro').innerHTML = contenuMicro;

}