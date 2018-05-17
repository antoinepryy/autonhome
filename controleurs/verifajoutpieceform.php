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
$id_residency = $_POST['idHouse'];
$data = array(
    'ID' => NULL,
    'name' => $name,
    'id_residency' => $id_residency,
    'id_roomCategory' => $id_roomCategory);

if(isset($_POST["roomName"])){
    $addRoom = createRoom($bdd, $data);
    header("Location: index.php?cible=mamaison&id=".$id_residency);

}

else{
    include('vues/erreur404.php');
}