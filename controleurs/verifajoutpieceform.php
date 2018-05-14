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



$name=$_POST['roomName'];
$id_roomCategory=getIdRoomCategory($bdd,$_POST['roomCategory']);
$id_residency = $_GET['id'];
$data = array(
    'ID' => NULL,
    'name' => $name,
    'id_residency' => $id_residency,
    'id_roomCategory' => $id_roomCategory,);

if(isset($_POST["name"])){
    $addRoom = createRoom($bdd, $data);
    die(var_dump('bueno'));
}

else{
    include('vues/erreur404.php');
}