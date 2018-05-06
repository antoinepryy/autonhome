<?php

$section = 'monabonnement';


if (!isset($_SESSION)) {
    session_start();
}
if(!function_exists("isLogged")){
    include('functions.php');
}
if(!function_exists("authentify")){
    include('sessions/user.php');
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
include('vues/monabonnement.php');
