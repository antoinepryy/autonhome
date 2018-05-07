<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 03/05/2018
 * Time: 11:32
 */
if(!function_exists("importAllSessionsAndModels")){
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}

if(isset($_POST["mail"]) && isset($_POST["password"])){
    $user = identifyUserDatabase($bdd, $_POST["mail"], $_POST["password"]);
    if($user){
        authentify($user);
    }
    else{
        $alerte = "Mot de passe ou login incorrect";

    }
}

else{
    include('vues/erreur404.php');
}

include('accueil.php');