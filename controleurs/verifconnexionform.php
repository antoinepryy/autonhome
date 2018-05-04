<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:32
 */
include ('sessions/user.php');

include('./modele/users.php');

if(isset($_POST["mail"]) && isset($_POST["password"])){
    $user = identifyUserDatabase($bdd, $_POST["mail"], $_POST["password"]);
    if($user != 'NULL'){
        authentify($user);
    }
    else{
        die(var_dump('fail'));
    }
    include ('./vues/accueil.php');


}

else{
    include('vues/erreur404.php');
}

$section = 'accueil';
include('vues/accueil.php');