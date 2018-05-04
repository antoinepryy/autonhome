<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:31
 */
session_start();
include('./modele/users.php');
if(isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["firstName"]) && isset($_POST["lastName"])){
    createUser($bdd, $_POST);

}

else{
    require ('erreur404.php');
}

$section = 'accueil';

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