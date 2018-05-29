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
    :action,
    :state,
    NULL,
    :id_room,
    :id_effectorType)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":action", $data["action"]);
    $statement->bindParam(":state", $data["state"]);
    $statement->bindParam(":id_room", $data["id_room"]);
    $statement->bindParam(":id_effectorType", $data["id_effectorType"]);
    $statement->execute();
}

function getAllEffectorFromRoom(PDO $bdd){
    $statement = $bdd->prepare('SELECT room.name , effector.id_room FROM room INNER JOIN effector ON effector.id_room = room.ID ' );
    $statement->execute();
    $roomEffectors = $statement ->fetchAll();
    return $roomEffectors;
}


function changeEffectorAction ($bdd,$id,$action){
    $effectorStatement = $bdd->prepare ('UPDATE effector SET action= :action WHERE id= :id');
    $effectorStatement->bindParam(':action', $action);
    $effectorStatement->bindParam(':id', $id);
    $effectorStatement->execute();
}