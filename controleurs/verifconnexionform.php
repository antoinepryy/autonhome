<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:32
 */


include('./modele/requetes.utilisateurs.php');
if(isset($_POST["mail"]) && isset($_POST["password"])){
    $user = identifyUserDatabase($bdd, $_POST["mail"], $_POST["password"]);
    die(var_dump(authentify($user)));
    if($user != 'NULL'){
        authentify($user);
    }
    else{
        die(var_dump('fail'));
    }


}

else{
    include('vues/erreur404.php');
}

$section = 'accueil';
include('vues/accueil.php');