<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 13/05/2018
 * Time: 18:16
 */

$section = 'inspectdatabase';


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

if ($status=='AD'){
    switch ($_GET["table"]){
        case "user":
            $list = getAll($bdd, "user");
            break;
        case "residence":
            $list = getAll($bdd, "residence");
            break;
        case "sensor":
            $list = getAll($bdd, 'sensor');
            break;
    }
    require ('vues/inspectdatabase.php');
}
else{
    require ('vues/erreur404.php');
}

include('vues/accueil.php');