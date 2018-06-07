<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 24/05/2018
 * Time: 12:18
 */


function findAllDevicesByRoom($bdd, $idRoom){
    $sensors = $bdd->prepare('
    select name, state, cardNumber, objectNumber value, dateTime, sensor_type.type from sensor
    inner join
    data on data.id_sensor = sensor.ID
    inner join
    sensor_type on sensor.id_sensorType = sensor_type.ID
    where id_room = :idroom');
    $sensors->bindParam(':idroom', $idRoom);

    $effectors = $bdd->prepare('
    select name, action, state, effector_type.type from effector
    inner join
    effector_type on  effector_type.ID = effector.id_effectorType
    where id_room = :idroom
    ');
    $effectors->bindParam('idroom',$idRoom);
    $sensors->execute();
    $effectors->execute();
    return array($sensors->fetchAll(), $effectors->fetchAll());

}

function findAllDevicesByRoom2($bdd, $idRoom){
    $sensors = $bdd->prepare('
    select name, state, cardNumber, objectNumber value, dateTime, sensor_type.type from sensor
    inner join
    data on data.id_sensor = sensor.ID
    inner join
    sensor_type on sensor.id_sensorType = sensor_type.ID
    where id_room = :idroom');
    $sensors->bindParam(':idroom', $idRoom);

    $effectors = $bdd->prepare('
    select name, state, cardNumber, objectNumber value, dateTime, sensor_type.type from sensor
    inner join
      (
        SELECT MAX(dateTime) as dateTime, id_sensor
        FROM data
        GROUP BY id_sensor
      ) as data
    inner join
    sensor_type on sensor.id_sensorType = sensor_type.ID
    ');
    $effectors->bindParam('idroom',$idRoom);
    $sensors->execute();
    $effectors->execute();
    return array($sensors->fetchAll(), $effectors->fetchAll());
}

    function getDataFromRoomId($bdd,$idRoom){
        $sensors = $bdd->prepare('
            SELECT data.ID,name, dateTime, data.value, state, data.id_sensor,cardNumber, objectNumber
            FROM data
              INNER JOIN
              (
                Select MAX(dateTime) as latestDate, value, id_sensor
                FROM data
                Group by id_sensor
              ) max
                on data.dateTime = max.latestDate
                   and data.id_sensor = max.id_sensor
              inner join sensor
                on data.id_sensor = sensor.ID
              inner join sensor_type on sensor.id_sensorType = sensor_type.ID
            where id_room = :idroom
        ');
        $effectors = $bdd->prepare('
        select effector.ID, name, action, state, effector_type.type from effector
        inner join
        effector_type on  effector_type.ID = effector.id_effectorType
        where id_room = :idroom
        ');
        $sensors->bindParam('idroom', $idRoom);
        $effectors->bindParam('idroom',$idRoom);

        $sensors->execute();
        $effectors->execute();


        return array($sensors->fetchAll(), $effectors->fetchAll());





}