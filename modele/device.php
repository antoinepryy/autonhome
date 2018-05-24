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