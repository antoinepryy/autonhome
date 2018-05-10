<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 05/05/2018
 * Time: 23:47
 */
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}
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
    header("Location: index.php?cible=monprofil");
}
else{
    require ('erreur404.php');
}