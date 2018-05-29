<?php

/**
 * Liste des fonctions spécifiques à la table des effecteurs
 */

// on récupère les requêtes génériques
include('connexion.php');

//on définit le nom de la table
$table = "effector";

function createEffector(PDO $bdd, $data){

    $statement = $bdd->prepare('INSERT INTO `effector` 
    (`ID`,
    `name`, 
    `action`,
    `state`,
    `serial`,
    `id_room`,
    `id_effectorType`)
    VALUES
    (NULL,
    :name, 
    NULL,
    :state,
    NULL,
    :id_room,
    :id_effectorType)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":state", $data["state"]);
    $statement->bindParam(":id_room", $data["id_room"]);
    $statement->bindParam(":id_effectortype", $data["id_effectortype"]);
    $statement->execute();
}

function getAllEffectorFromRoom(PDO $bdd){
    $statement = $bdd->prepare('SELECT room.name , effector.id_room FROM room INNER JOIN effector ON effector.id_room = room.ID ' );
    $statement->execute();
    $roomEffectors = $statement ->fetchAll();
    return $roomEffectors;
}