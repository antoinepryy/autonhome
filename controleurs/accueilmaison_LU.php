<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 16/04/2018
 * Time: 18:40
 */
$section = 'accueilmaison_LU'; //section sert à gérer automatiquement le css une fois arrivé dans les vues

if(!function_exists("importAllSessionsAndModels")){ //Upload auto de toutes les variables de sessions ainsi que des fcts de BDD
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status; // set l'état de l'utilistateur, principalement pour la config du css des vues
if(isLoggedAsAdmin()){
    $status="AD";
}
elseif (isLoggedAsUser()){
    $id_residency=$_GET['id'];
    $name=getHouseInfoFromId($bdd,$id_residency)[0];
    $myRooms=getAllResidenceRooms($bdd,$id_residency)[0];
    $status="LU";
}
else{
    $status="UU";
}

include('vues/accueilmaison_LU.php');
