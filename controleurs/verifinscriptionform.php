<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:31
 */
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}
if(isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["firstName"]) && isset($_POST["lastName"])){
    if (createUser($bdd, $_POST)){
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
        header("Location: index.php?cible=accueil");
    }
    else{
        $section='inscription';
        $alerte='Cette addresse mail est déjà enregistrée !';
        $status='UU';
        header("Location: index.php?cible=inscription");
    }
}
else{
    require ('erreur404.php');
}

