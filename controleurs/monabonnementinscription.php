<?php
/**
 * Created by IntelliJ IDEA.
 * User: yacin
 * Date: 28/05/2018
 * Time: 15:33
 */


$section = 'monabonnementinscription';
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


include('vues/monabonnementinscription.php');
