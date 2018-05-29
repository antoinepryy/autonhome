<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 24/05/2018
 * Time: 12:18
 */


function findAllDevicesByRoom($bdd, $idRoom){
    $sensors = $bdd->prepare(
        'SELECT * FROM sensor WHERE id_room = :room'
    );

    $effectors = $bdd->prepare(
        'SELECT * FROM effector WHERE id_room = :room'
    );

    $sensors->bindParam(':room', $idRoom);
    $effectors->bindParam(':room', $idRoom);
    $sensors->execute();
    $effectors->execute();
    return array($sensors->fetchAll(), $effectors->fetchAll());

}

function findAllDevicesByRoom2($bdd, $idroom){
    $sensors = $bdd->prepare('
    select name, state, value, dateTime, sensor_type.type from sensor
    inner join
    data on data.id_sensor = sensor.ID
    inner join
    sensor_type on sensor.id_sensorType = sensor_type.ID
    where id_room = :idroom');
    $sensors->bindParam(':idroom', $idroom);

    $effectors = $bdd->prepare('
    select name, action, state, effector_type.type from effector
    inner join
    effector_type on  effector_type.ID = effector.id_effectorType
    where id_room = :idroom
    ');
    $effectors = $bdd->bindParam('idroom',$idroom);
    $sensors->execute();
    $effectors->execute();
    return array($sensors->fetchAll(), $effectors->fetchAll());




}