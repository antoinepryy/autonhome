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
    $residencyStatement = $bdd->prepare('SELECT * FROM room WHERE id_residency = :idResidency');
    $residencyStatement->bindParam(':idResidency', $id);
    $residencyStatement->execute();
    $inHouse = $residencyStatement->fetchAll();;
    return (array($inHouse));
}

function getAllRoomCategoryRooms ($bdd, $id, $id_category){
    $residencyStatement = $bdd->prepare('SELECT * FROM room WHERE id_residency = :idResidency AND id_roomCategory = :idRoomCategory');
    $residencyStatement->bindParam(':idResidency', $id);
    $residencyStatement->bindParam(':idRoomCategory', $id_category);
    $residencyStatement->execute();
    $inHouse = $residencyStatement->fetchAll();;
    return (array($inCategory));
}