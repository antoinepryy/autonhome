<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 28/05/2018
 * Time: 16:44
 */

$section = 'ajouteffector';
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


include('vues/ajouteffector.php');
