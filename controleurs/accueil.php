<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 16/04/2018
 * Time: 18:40
 */
$section = 'accueil';


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

include('vues/accueil.php');
