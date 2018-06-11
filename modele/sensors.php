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
    `cardNumber`,
    `objectNumber`,
    `name`, 
    `state`,
    `id_room`,
    `id_sensortype`)
    VALUES
    (NULL,
    NULL,
    NULL,
    :name, 
    :state,
    :id_room,
    :id_sensortype)');
    $statement->bindParam(":name", $data["name"]);
    $statement->bindParam(":state", $data["state"]);
    $statement->bindParam(":id_room", $data["id_room"]);
    $statement->bindParam(":id_sensortype", $data["id_sensortype"]);
    $statement->execute();
}


function getAllSensorsFromRoom(PDO $bdd,$idroom){
    $statement = $bdd->prepare('SELECT room.name , sensor.id_room FROM room INNER JOIN sensor ON sensor.id_room = room.ID WHERE id_room = :idroom' );
    $statement->bindParam(':idroom', $idroom);
    $statement->execute();
    $roomSensors = $statement ->fetchAll();
    return $roomSensors;
}

function getAllSensorsFromResidence ($bdd,$id_residence){
    $statement = $bdd->prepare('SELECT room.id_residency , sensor.id_room FROM room INNER JOIN sensor ON sensor.id_room = room.ID WHERE id_residency = :idResidence' );
    $statement->bindParam(':idResidence', $id_residence);
    $statement->execute();
    $residenceSensors = $statement ->fetchAll();
    return $residenceSensors;
}

function getAllTypeSensorsFromResidence ($bdd,$id_residence,$id_type){
    $statement = $bdd->prepare('SELECT sensor.ID  FROM room INNER JOIN sensor ON sensor.id_room = room.ID WHERE id_residency = :idResidence AND id_SensorType=:idType ');
    $statement->bindParam(':idResidence', $id_residence);
    $statement->bindParam(':idType', $id_type);
    $statement->execute();
    $residenceSensors = $statement ->fetchAll();
    return $residenceSensors;
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

    function getAllSensorsFromHouse(PDO $bdd){
        $statement = $bdd ->prepare('SELECT residence.name , sensor.residence FROM residence INNER JOIN sensor ON sensor.ID=residence.ID');
        $statement->execute();
        $residenceSensors = $statement ->fetchAll();
        return $residenceSensors;
}


function sensorStateFromsensortype(PDO $bdd){
    $statement = $bdd -> prepare('SELECT name, state, type FROM sensor INNER JOIN sensor_type ON sensor.id_sensorType=sensor_type.ID');
    $statement->execute();
    $stateSensortype = $statement ->fetchAll();
    return $stateSensortype;

}

function getDeviceIdFromSocket($bdd, $deviceType, $object, $number){
    if ($deviceType == 'sensor'){
        $st = $bdd -> prepare('
        SELECT ID FROM sensor 
        where cardNumber = :card 
        and objectNumber = :obj
        ');
        $st -> bindParam('');
    }
    elseif($deviceType == 'effector'){

    }
};

function readFrame($bdd, $frame){
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
    sscanf($frame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    var_dump($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec);
    if ($t == 1){
        $statement = $bdd->prepare('INSERT 
        INTO data
        (`ID`,
        `cardNumber`,
        `objectNumber`,
        `name`, 
        `state`,
        `id_room`,
        `id_sensortype`)
        VALUES
        (NULL,
        NULL,
        NULL,
        :name, 
        :state,
        :id_room,
        :id_sensortype)');

        return true;
    }
    else{
        return false;
    }

}



?>