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
    answerDiscussion($bdd, $_POST["text"],$_GET["id"]);
    header("Location: index.php?cible=forummessage&id=".$_GET['id']);
    require('vues/forummessage.php');

}
else{
    require ('vues/erreur404.php');
}