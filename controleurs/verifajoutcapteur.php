<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 11/05/2018
 * Time: 14:53
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


if($_POST[capteurlumiereLDR]= true){
    $here = true;
    $name = $_POST['namelumiere'];
    $serial = $_POST[seriallumiere];
    $state = "OFF";
    $id_room = $_POST[$id_room];
    $id_sensortype = 1;
}

if($_POST[capteurtemperatureLM32]= true){
    $here = true;
    $name = $_POST['namelumiere'];
    $serial = $_POST[seriallumiere];
    $state = "OFF";
    $id_room = $_POST[$id_room];
    $id_sensortype = 1;
}

if($_POST[microphoneelectret]= true){
    $here = true;
    $name = $_POST['namelumiere'];
    $serial = $_POST[seriallumiere];
    $state = "OFF";
    $id_room = $_POST[$id_room];
    $id_sensortype = 1;
}

$name=$_POST['roomName'];
$id_roomCategory=getIdRoomCategory($bdd,$_POST['roomCategory']);
$id_residency = $_POST['idHouse'];
$newsensors = array(
    'Here' => $here
);
$data = array(
    'ID' => NULL,
    'name' => $name,
    'id_residency' => $id_residency,
    'id_roomCategory' => $id_roomCategory);

