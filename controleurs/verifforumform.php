<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 15/05/2018
 * Time: 11:57
 */
$section = 'forum';

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


if(isset($_POST["topic"])){

    createSubject($bdd, $_POST);
    createMessage($bdd,$_POST);
    header("Location: index.php?cible=forum");
}
else{
    require ('vues/erreur404.php');
}

