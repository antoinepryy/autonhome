<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 05/05/2018
 * Time: 12:27
 */

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

if(isset($_POST["addressNumber"])){ //quand un proprio ajoute une maison
    createHouse($bdd, $_POST);
    header("Location: index.php?cible=mamaison");
}
elseif (isset($_POST["secret"])){ //quand un locataire se link à une maison

    linkRenter($bdd,$_POST['secret']);
    header("Location: index.php?cible=mamaison");
}

else{
    include('vues/erreur404.php');
}