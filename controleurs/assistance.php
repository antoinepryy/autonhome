<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 30/04/2018
 * Time: 15:20
 */
$section = 'assistance';
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

include('vues/assistance.php');