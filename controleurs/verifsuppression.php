<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 11/05/2018
 * Time: 14:53
 */

$section = 'supprimerunepiece';
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

$id_residency=$_GET['id'];
$id_category=$_GET['idroom'];

$id=getIdRoom($bdd,$_POST['choix'])[0];
deleteRoom($bdd,$id);
header("Location: index.php?cible=mamaison&id=".$id_residency);