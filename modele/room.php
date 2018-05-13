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
    :idResidency,
    :idRoomCategory,)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":idResidency", $data["residencyId"]);
    $statement->bindParam(":idRoomCategory", $data["roomCategoryId"]);
    $statement->execute();
}

function getAllRooms($bdd)
{
    $statement = $bdd->prepare('SELECT * FROM room');
    $statement->execute();
    $rooms = $statement->fetchAll();
}

function getAllResidenceRooms($bdd, $id){
    $residencyStatement = $bdd->prepare('SELECT * FROM room WHERE id_residency = :idResidency');
    $residencyStatement->bindParam(':idResidency', $id);
    $residencyStatement->execute();
    $inHouse = $residencyStatement->fetchAll();;
    return (array($inHouse));
}