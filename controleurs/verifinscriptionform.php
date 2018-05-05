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
        include('vues/accueil.php');
    }
    else{
        $section='inscription';
        $alerte='Cette addresse mail est déjà enregistrée !';
        $status='UU';
        include ('vues/inscription.php');
    }
}
else{
    require ('erreur404.php');
}

