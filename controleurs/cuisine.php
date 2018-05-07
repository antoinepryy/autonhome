<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 06/05/2018
 * Time: 16:13
 */

$section = 'cuisine';
if (!isset($_SESSION)){
    session_start();
}

if(!function_exists("isLogged")){
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

include('vues/cuisine.php');