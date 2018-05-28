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


//function createSensor(PDO $bdd, $data)
//{
//}

function createSensor(PDO $bdd, $data){

    $statement = $bdd->prepare('INSERT INTO `sensor` 
    (`ID`,
    `name`, 
    `state`,
    `value`,
    `serial`,
    `id_room`,
    `id_sensortype`)
    VALUES
    (NULL,
    :name, 
    :state,
    NULL,
    NULL,
    :id_room,
    :id_sensortype)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":state", $data["state"]);
    $statement->bindParam(":id_room", $data["id_room"]);
    $statement->bindParam(":id_sensortype", $data["id_sensortype"]);
    $statement->execute();
}


function getAllSensorsFromRoom(PDO $bdd){
    $statement = $bdd->prepare('SELECT room.name , sensor.id_room FROM room INNER JOIN sensor ON sensor.id_room = room.ID ' );
    $statement->execute();
    $roomSensors = $statement ->fetchAll();
    return $roomSensors;
}



function getAllSensorsFromRoomInput($bdd, $id){
    $residencyStatement=$bdd->prepare('SELECT * FROM sensors WHERE id_room = :idRoom');
    $residencyStatement->bindParam(':idRoom', $id);
    $residencyStatement->execute();
    $residenceSensors = $residencyStatement->fetchAll();
    return $residenceSensors;
}

function deleteSensor ($bdd, $id){
    $roomStatement = $bdd->prepare ('DELETE FROM sensor WHERE id= :id');
    $roomStatement->bindParam(':id', $id);
    $roomStatement->execute();
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


function getAllUserSensors(PDO $bdd,$id){
    $statement = $bdd->prepare('SELECT * FROM user INNER JOIN residence ON user.key=residence.key');
    $statement = $bdd->prepare('SELECT * FROM residence INNER JOIN room ON residence.key=room.key');
    $statement = $bdd->prepare('SELECT * FROM room INNER JOIN sensor ON room.key=sensor.key');
    $statement->execute();
    $usersensor = $statement->fetchAll();
    return $usersensor;

}



?>