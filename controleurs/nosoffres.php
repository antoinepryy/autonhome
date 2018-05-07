<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 03/05/2018
 * Time: 11:16
 */
$section = 'nosoffres';
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

include('vues/nosoffres.php');