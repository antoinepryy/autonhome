<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 16/04/2018
 * Time: 18:40
 */
$section = 'accueil';
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

include('vues/accueil.php');
