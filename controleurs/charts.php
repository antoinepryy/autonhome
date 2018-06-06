<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 04/06/2018
 * Time: 21:55
 */


$section = 'charts';
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status;
if(isLoggedAsAdmin()){
    $status="AD";
    $data = dataTemperature($bdd);
}
elseif (isLoggedAsUser()){
    $status="LU";
    $data = dataTemperature($bdd);
}
else{
    $status="UU";
}

include('vues/charts.php');