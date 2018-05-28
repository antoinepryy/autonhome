<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 11/05/2018
 * Time: 14:53
 */

$section = 'mamaison';
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status;
if(isLoggedAsAdmin()){
    $status="AD";
}
elseif (isLoggedAsUser()){
    $status="LU";
}
else{
    $status="UU";
}



if(isset($_POST["lightquantity"],$_POST['roomchoice'])){
    for ($number_lightSensor = 1; $number_lightSensor <= $_POST['lightquantity']; $number_lightSensor++){

        $data = array(
            'name' => $_POST['nameLightSensor'.$number_lightSensor],
            'state' => "ORD",
            'id_room' => $_POST['roomchoice'],
            'id_sensortype' => 1,
        );
        $addSensor = createSensor($bdd,$data);

    }
}

if(isset($_POST["temperaturequantity"],$_POST['roomchoice'])){
    for ($number_temperatureSensor = 1; $number_temperatureSensor <= $_POST['temperaturequantity']; $number_temperatureSensor++){

        $data = array(
            'name' => $_POST['nameTemperatureSensor'.$number_temperatureSensor],
            'state' => "ORD",
            'id_room' => $_POST['roomchoice'],
            'id_sensortype' => 2,
        );
        $addSensor = createSensor($bdd,$data);

    }
}

if(isset($_POST["microquantity"],$_POST['roomchoice'])){
    for ($number_microSensor = 1; $number_microSensor <= $_POST['microquantity']; $number_microSensor++){

        $data = array(
            'name' => $_POST['nameMicroSensor'.$number_microSensor],
            'state' => "ORD",
            'id_room' => $_POST['roomchoice'],
            'id_sensortype' => 3,
        );
        $addSensor = createSensor($bdd,$data);

    }
}


