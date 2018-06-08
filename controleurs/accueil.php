<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 16/04/2018
 * Time: 18:40
 */

$section = 'accueil'; //section sert à gérer automatiquement le css une fois arrivé dans les vues

if(!function_exists("importAllSessionsAndModels")){ //Upload auto de toutes les variables de sessions ainsi que des fcts de BDD
    include('importAllSessionsAndModels.php');
    importAllSessionsAndModels();
}


$status; // set l'état de l'utilistateur, principalement pour la config du css des vues
if(isLoggedAsAdmin()){
    $status="AD";
}
elseif (isLoggedAsUser()){
    $myHouses = getAllUserHouses($bdd, $_SESSION['userId']);
    if (empty($myHouses[0])){
        $houseName="NULL";
        $myRooms=array();
    }
    elseif (!isset($_POST['house'])){
        $id_residency=$myHouses[0][0][0];
        $houseName=$myHouses[0][0][1];
        $myRooms=getAllResidenceRooms($bdd,$id_residency)[0];
    }
    else {
        $id_residency=$_POST['house'];
        $houseName=getHouseInfoFromId($bdd,$id_residency)[0];
        $myRooms=getAllResidenceRooms($bdd,$id_residency)[0];
    }
    $status="LU";
}
else{
    $status="UU";
}

include('vues/accueil.php');
