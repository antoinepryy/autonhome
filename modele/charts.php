<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 06/06/2018
 * Time: 22:23
 */
include('connexion.php');

function dataTemperature(PDO $bdd) {
    $statement = $bdd->prepare('SELECT value, dateTime FROM data WHERE id_sensor=2');
    $statement->execute();
    return $statement->fetchAll();
}
