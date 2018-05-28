<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 25/05/2018
 * Time: 16:43
 */
$section = 'verifanswerform';

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


if(isset($_POST["text"])){
    answerDiscussion($bdd, $_POST["text"],1);
    header("Location: index.php?cible=forummessage");
    require('vues/forummessage.php');
}
else{
    require ('vues/erreur404.php');
}