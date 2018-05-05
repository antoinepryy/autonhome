<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 05/05/2018
 * Time: 23:47
 */


if (!isset($_SESSION)) {
    session_start();
}
if(!function_exists("isLogged")){
    include('functions.php');
}
if(!function_exists("authentify")){
    include('sessions/user.php');
}
include('./modele/users.php');
if(isset($_POST["mail"]) && isset($_POST["firstName"]) && isset($_POST["lastName"])){
    $section = 'monprofil';
    $status;
    if(isLoggedAsAdmin()){
        $status="AD";
    }
    elseif (isLoggedAsUser()){
        $status="LU";
    }
    updateUser($bdd, $_POST);
    include('vues/monprofil.php');
}
else{
    require ('erreur404.php');
}