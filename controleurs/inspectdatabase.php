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
            $section = 'inspectuser';
            $list = getAll($bdd, "user");
            require ('vues/admin/inspectuser.php');
            break;
        case "residence":
            $section = 'inspectresidence';
            $list = getAll($bdd, "residence");
            require ('vues/admin/inspectresidence.php');
            break;
        case "sensor":
            $section = 'inspectsensor';
            $list = getAll($bdd, 'sensor');
            require ('vues/admin/inspectsensor.php');
            break;
        case "effector":
            $section = 'inspecteffector';
            $list = getAll($bdd, "effector");
            require ('vues/admin/inspecteffector.php');
            break;
    }

}
else{
    require ('vues/erreur404.php');
}
