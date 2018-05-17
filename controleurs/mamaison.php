<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoi
 * Date: 10/05/2018
 * Time: 11:57
 */

$section = 'mamaison';
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

$residences = getAllUserHouses($bdd, $_SESSION["userId"]);

if($status=='LU' && !isset($_GET['id'])){
    include ('vues/mamaison.php');
}

elseif ($status=='LU' && isset($_GET['id']) && !isset($_GET['idroom']){
    $section='mamaisonmain';
    include ('vues/mamaisonmain.php');
}

if($status=='LU' && isset($_GET['id']) && isset($_GET['idroom'])){
    $roomcategory = getIdRoomCategory($bdd,$_GET['idroom']);

}