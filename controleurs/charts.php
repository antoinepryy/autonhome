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


if(isLoggedAsAdmin()){
    $status="AD";
    $data = getData($bdd,$_GET["sensor"]);
}
elseif (isLoggedAsUser()){
    $status="LU";
    $data = getData($bdd,$_GET["sensor"]);
    $value = getValue($data);
    $date = getDateTime($data);
}
else{
    $status="UU";
}

include('vues/charts.php');