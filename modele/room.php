<?php
include('connexion.php');
//on définit le nom de la table
$table = "room";

function createRoom(PDO $bdd, $data)
{
    $statement = $bdd->prepare('INSERT INTO `room` 
    (`ID`,
    `name`, 
    `id_residency`, 
    `id_roomCategory`)
    VALUES
    (NULL,
    :name, 
    :id_residency,
    :id_roomCategory)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":id_residency", $data["id_residency"]);
    $statement->bindParam(":id_roomCategory", $data["id_roomCategory"]);
    $statement->execute();
}

function getAllRooms($bdd)
{
    $statement = $bdd->prepare('SELECT * FROM room');
    $statement->execute();
    $rooms = $statement->fetchAll();
}

function getAllResidenceRooms($bdd, $id){
    $residencyStatement = $bdd->prepare('SELECT id, name FROM room WHERE id_residency = :idResidency');
    $residencyStatement->bindParam(':idResidency', $id);
    $residencyStatement->execute();
    $inHouse = $residencyStatement->fetchAll();
    return (array($inHouse));
}

function isThereLightEffector($bdd, $id){
    $statement = $bdd->prepare('SELECT id_room FROM effector WHERE id_room = :idResidency AND id_effectorType = 6');
    $statement->bindParam(':idResidency',$id);
    $statement->execute();
    $lighteffector = $statement->fetchAll();
    return($lighteffector);
}

function isThereFanEffector($bdd, $id){
    $statement = $bdd->prepare('SELECT id_room FROM effector WHERE id_room = :idResidency AND id_effectorType = 4');
    $statement->bindParam(':idResidency',$id);
    $statement->execute();
    $faneffector = $statement->fetchAll();
    return($faneffector);
}

function isThereShutterEffector($bdd, $id){
    $statement = $bdd->prepare('SELECT id_room FROM effector WHERE id_room = :idResidency AND id_effectorType = 5');
    $statement->bindParam(':idResidency',$id);
    $statement->execute();
    $shuttereffector = $statement->fetchAll();
    return($shuttereffector);
}

function getAllRoomCategoryRooms ($bdd, $id, $id_category){
    $residencyStatement = $bdd->prepare('SELECT id, name FROM room WHERE id_residency = :idResidency AND id_roomCategory = :idRoomCategory');
    $residencyStatement->bindParam(':idResidency', $id);
    $residencyStatement->bindParam(':idRoomCategory', $id_category);
    $residencyStatement->execute();
    $inCategory = $residencyStatement->fetchAll();;
    return (array($inCategory));
}

function deleteRoom ($bdd, $id){
    $roomStatement = $bdd->prepare ('DELETE FROM room WHERE id= :id');
    $roomStatement->bindParam(':id', $id);
    $roomStatement->execute();
}

function getIdRoom($bdd, $name){
    $statement = $bdd->prepare('SELECT ID FROM room WHERE name = :name');
    $statement->bindParam(':name', $name);
    $statement->execute();
    return $statement->fetch();
}