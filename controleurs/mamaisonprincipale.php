<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 04/05/2018
 * Time: 17:47
 */
$section = 'mamaisonprincipale';
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

include('vues/mamaisonprincipale.php');