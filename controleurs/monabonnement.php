<?php

$section = 'monabonnement';
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
    $clients=joinIdUserSubscription($bdd);
    if (in_array($_SESSION['userId'],joinIdUserSubscription($bdd),true)){
        $myHouses = getAllUserHouses($bdd, $_SESSION['userId'])[0];
        $i=0;
        $j=0;
        foreach ($myHouses as $house){
            $sensorTemperatureInHouse=getAllTypeSensorsFromResidence($bdd,$house['ID'],2);
            $sensorMouvementInHouse=getAllTypeSensorsFromResidence($bdd,$house['ID'],3);
            $i=$i+count($sensorTemperatureInHouse);
            $j=$j+count($sensorMouvementInHouse);
        }
    }

    else {
        include('vues/monabonnementinscription.php');
    }

}
else{
    $status="UU";
}

include('vues/monabonnement.php');