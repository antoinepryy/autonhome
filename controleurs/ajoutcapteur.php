<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 17/05/2018
 * Time: 10:26
 */

$section = 'ajoutcapteur';
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


include('vues/ajoutcapteur.php');
