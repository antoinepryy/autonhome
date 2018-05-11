<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 05/05/2018
 * Time: 12:27
 */

$section = 'accueil';
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

if(isset($_POST["name"])){
    createHouse($bdd, $_POST);
    die(var_dump('pièce créée'));
}

else{
    include('vues/erreur404.php');
}