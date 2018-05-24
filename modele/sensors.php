<?php

/**
 * Liste des fonctions spécifiques à la table des capteurs
 */

// on récupère les requêtes génériques
include('connexion.php');

//on définit le nom de la table
$table = "sensor";



/**
 * Recherche les capteurs en fonction du type passé en paramètre
 * @param PDO $bdd
 * @param string $table
 * @param string $type
 * @return array
 */
function rechercheParType(PDO $bdd, string $table, string $type): array {
    
    return recherche($bdd, $table, ['type' => $type]);
    
}

function getAllSensors(PDO $bdd){

    $statement = $bdd->prepare('SELECT * FROM sensors');
    $statement->execute();
    $sensors = $statement->fetchAll();
    return $sensors;
}

function createSensor(PDO $bdd, $data){
    $statement = $bdd->prepare('INSERT INTO `sensor` 
    (`ID`,
    `name`, 
    `state`, 
    `serial`,
    `id_room`,
    `id_sensortype`)
    VALUES
    (NULL,
    :name, 
    :state,
    :serial,
    :id_room,
    :id_sensortype)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":id_residency", $data["id_residency"]);
    $statement->bindParam(":id_roomCategory", $data["id_roomCategory"]);
    $statement->execute();

}


function getAllResidenceSensors($bdd, $id){
    $residencyStatement=$bdd->prepare('SELECT * FROM room WHERE id_residency = :idResidency');
    $residencyStatement->bindParam(':idResidency', $id);
    $residencyStatement->execute();

    }

function findSensorsByState($bdd, $state){
    $statement = $bdd->prepare('SELECT * from sensor WHERE state = :state');
    $statement->bindParam(':state', $state);
    $statement->execute();
    $result = $statement->fetchAll();
    if(count($result)==0){
        return false;
    }
    else{
        return $result;
    }
}


function validateSensorAdmin($bdd,$id ){
    //todo
}

?>