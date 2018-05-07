<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 05/05/2018
 * Time: 12:27
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
if(!function_exists("createHouse")) {
    include('./modele/house.php');
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

if(isset($_POST["addressNumber"])){
    createHouse($bdd, $_POST);
}

else{
    include('vues/erreur404.php');
}