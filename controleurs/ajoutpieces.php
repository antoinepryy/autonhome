<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 05/05/2018
 * Time: 16:58
 */
$section = 'ajoutpieces';
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

include('vues/ajoutpieces.php');