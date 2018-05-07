<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 30/04/2018
 * Time: 15:20
 */
$section = 'assistance';

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

include('vues/assistance.php');
