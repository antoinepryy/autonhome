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

$name="nom";
$id_roomCategory=0;

if(isset($_POST["roomName"])){
    $name=$_POST['nom'];
}

if(isset($_POST["roomCategory"])){
    $id_roomCategory=getIdRoomCategory($bdd,$_POST['roomCategory']);
}

$id_residency = $_GET['id'];
$data=[$name,$id_residency,$id_roomCategory];


if(isset($_POST["name"])){
    createRoom($bdd, $data);
    die(var_dump('bueno'));
    //header('Location: index.php?cible=mamaison&id='$_GET['id']);
}

else{
    include('vues/erreur404.php');
}