<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 17/05/2018
 * Time: 10:53
 */

$section = 'ajouterunemaison';
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
include('vues/ajouterunemaison.php');